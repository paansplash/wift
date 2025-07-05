<?php

namespace App\Http\Controllers;

use App\Models\WishlistItem;
use App\Repositories\UserRepository;
use App\Repositories\WishlistRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PublicWishlistController extends Controller
{
    protected $userRepository;
    protected $wishlistRepository;

    public function __construct(UserRepository $userRepo, WishlistRepository $wishlistRepo)
    {
        $this->userRepository = $userRepo;
        $this->wishlistRepository = $wishlistRepo;
    }

    public function show($name, $title)
    {
        $user = $this->userRepository->findByName($name);
        $wishlist = $this->wishlistRepository->findByUserAndTitle($user->id, $title);

        return view('public.index', compact('wishlist', 'user'));
    }

    public function buy(WishlistItem $item)
    {
        if ($item->status_id == 6) {
            return back()->with('info', 'This item has already been purchased.');
        }

        $item->status_id = 6; // Mark as Ordered
        $item->save();

        return back()->with('success', 'Thank you for buying this gift!');
    }

    public function checkout(WishlistItem $item)
    {
        if ($item->status_id == 6) {
            return redirect()->back()->with('info', 'This item has already been purchased.');
        }

        return view('public.checkout', compact('item'));
    }

    public function processCheckout(Request $request, WishlistItem $item)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'note' => 'nullable|string',
        ]);

        // Create a pending order
        $order = \App\Models\Order::create([
            'wishlist_id' => $item->wishlist_id,
            'amount' => $item->inventory->price,
            'status_id' => 1, // Pending
            'name' => $request->name,
            'note' => $request->note,
        ]);

        // Create order item but don't update wishlist item yet
        \App\Models\OrderItem::create([
            'order_id' => $order->id,
            'wishlist_item_id' => $item->id,
            'price' => $item->inventory->price,
            'quantity' => 1,
        ]);

        // Create Billplz bill
        $response = Http::withBasicAuth(env('BILLPLZ_SECRET_KEY'), '')
            ->asForm()
            ->post('https://www.billplz-sandbox.com/api/v3/bills', [
                'collection_id' => env('BILLPLZ_COLLECTION_ID'),
                'description' => 'Purchase for ' . $item->inventory->name,
                'email' => 'customer@example.com', // Replace with actual customer email if available
                'name' => $request->name,
                'amount' => intval($item->inventory->price * 100), // amount in cents
                'callback_url' => route('public.wishlist.paymentCallback'),
                'redirect_url' => route('public.wishlist.payment', $order->id),
                'reference_1_label' => 'Order ID',
                'reference_1' => $order->id,
            ]);

        if ($response->failed()) {
            return back()->with('error', 'Failed to initiate payment. Please try again.');
        }

        $bill = $response->json();
        return redirect($bill['url']);
    }

    /**
     * Billplz will redirect here after payment.
     * We use query ?billplz[paid]=true|false to know payment status.
     */
    public function payment(\App\Models\Order $order, Request $request)
    {
        $billplz = $request->billplz;

        if (!$billplz || !isset($billplz['paid'])) {
            return redirect()->route('public.wishlist.show', [$order->wishlist->user->name, $order->wishlist->title])
                ->with('error', 'Payment verification failed. Please try again.');
        }

        if ($billplz['paid'] === 'true') {
            // Payment successful: update statuses
            $order->status_id = 6; // Ordered
            $order->save();

            $orderItem = $order->orderItems()->first();
            if ($orderItem) {
                $wishlistItem = $orderItem->wishlistItem;
                $wishlistItem->status_id = 6; // Ordered
                $wishlistItem->save();
            }

            return view('public.payment_success', compact('order'));
        } else {
            return view('public.payment_failed', compact('order'));
        }
    }

    /**
     * Billplz will send server-to-server POST callback here.
     * This is more reliable than relying on user redirect.
     */
    public function paymentCallback(Request $request)
    {
        $billplz = $request->input('billplz');
        if (!$billplz || !isset($billplz['paid'], $billplz['reference_1'])) {
            return response('Invalid callback payload', 400);
        }

        $orderId = $billplz['reference_1'];
        $paid = $billplz['paid'];

        $order = \App\Models\Order::find($orderId);
        if (!$order) {
            return response('Order not found', 404);
        }

        if ($paid == 'true') {
            $order->status_id = 6; // Ordered
            $order->save();

            $orderItem = $order->orderItems()->first();
            if ($orderItem) {
                $wishlistItem = $orderItem->wishlistItem;
                $wishlistItem->status_id = 6; // Ordered
                $wishlistItem->save();
            }
        }

        return response('OK', 200);
    }
}
