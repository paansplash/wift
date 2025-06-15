<?php

namespace App\Http\Controllers;

use App\Models\WishlistItem;
use App\Repositories\UserRepository;
use App\Repositories\WishlistRepository;
use Illuminate\Http\Request;

class PublicWishlistController extends Controller
{
    protected $userRepository;
    protected $wishlistRepository;

    public function __construct(UserRepository $userRepo, WishlistRepository $wishlistRepo)
    {
        // ❌ Removed auth middleware to allow public access
        // $this->middleware('auth');

        $this->userRepository = $userRepo;
        $this->wishlistRepository = $wishlistRepo;
    }

    /**
     * Show a public wishlist page.
     */
    public function show($name, $title)
    {
        $user = $this->userRepository->findByName($name);

        $wishlist = $this->wishlistRepository->findByUserAndTitle($user->id, $title);

        return view('public.wishlist', compact('wishlist', 'user'));
    }

    /**
     * Mark a wishlist item as purchased.
     */
    public function buy(WishlistItem $item)
    {
        if ($item->status_id == 3) {
            return back()->with('info', 'This item has already been purchased.');
        }

        $item->status_id = 3; // Purchased
        $item->save();

        return back()->with('success', 'Thank you for buying this gift!');
    }
}
