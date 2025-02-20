<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWishlistItemRequest;
use App\Http\Requests\UpdateWishlistItemRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\WishlistItemRepository;
use App\Repositories\WishlistRepository;
use App\Repositories\InventoryRepository;
use App\Repositories\StatusRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class WishlistItemController extends AppBaseController
{
    /** @var WishlistItemRepository $wishlistItemRepository*/
    private $wishlistItemRepository;
    private $wishlistRepository;
    private $inventoryRepository;
    private $statusRepository;

    public function __construct(WishlistItemRepository $wishlistItemRepo, WishlistRepository $wishlistRepo, InventoryRepository $inventoryRepo, StatusRepository $statusRepo)
    {
        $this->wishlistItemRepository = $wishlistItemRepo;
        $this->wishlistRepository = $wishlistRepo;
        $this->inventoryRepository = $inventoryRepo;
        $this->statusRepository = $statusRepo;
    }

    /**
     * Display a listing of the WishlistItem.
     */
    public function index(Request $request)
    {
        $wishlistItems = $this->wishlistItemRepository->paginate(10);

        return view('pages.admin.wishlist_items.index')
            ->with('wishlistItems', $wishlistItems);
    }

    /**
     * Show the form for creating a new WishlistItem.
     */
    public function create()
    {
        $wishlists = $this->wishlistRepository->getWishlists();
        $inventories = $this->inventoryRepository->getInventories();
        $statuses = $this->statusRepository->getActivityStatuses();

        return view('pages.admin.wishlist_items.create', compact('wishlists', 'inventories', 'statuses'));
    }

    /**
     * Store a newly created WishlistItem in storage.
     */
    public function store(Request $request)
    {
        $wishlistItems = json_decode($request->input('wishlist_items'), true);

        if (!$wishlistItems || count($wishlistItems) === 0) {
            return redirect()->back()->withErrors(['error' => 'Please add at least one wishlist item.']);
        }

        foreach ($wishlistItems as $item) {
            $this->wishlistItemRepository->create([
                'wishlist_id' => $item['wishlist_id'],
                'inventory_id' => $item['inventory_id'],
                'status_id' => $item['status_id']
            ]);
        }

        return redirect(route('wishlistItems.index'))->with('success', 'Wishlist items saved successfully.');
    }


    /**
     * Display the specified WishlistItem.
     */
    public function show($id)
    {
        $wishlistItem = $this->wishlistItemRepository->find($id);

        if (empty($wishlistItem)) {
            Flash::error('Wishlist Item not found');

            return redirect(route('wishlistItems.index'));
        }

        return view('pages.admin.wishlist_items.show')->with('wishlistItem', $wishlistItem);
    }

    /**
     * Show the form for editing the specified WishlistItem.
     */
    public function edit($id)
    {
        $wishlistItem = $this->wishlistItemRepository->find($id);

        if (empty($wishlistItem)) {
            Flash::error('Wishlist Item not found');

            return redirect(route('wishlistItems.index'));
        }

        return view('pages.admin.wishlist_items.edit')->with('wishlistItem', $wishlistItem);
    }

    /**
     * Update the specified WishlistItem in storage.
     */
    public function update($id, UpdateWishlistItemRequest $request)
    {
        $wishlistItem = $this->wishlistItemRepository->find($id);

        if (empty($wishlistItem)) {
            Flash::error('Wishlist Item not found');

            return redirect(route('wishlistItems.index'));
        }

        $wishlistItem = $this->wishlistItemRepository->update($request->all(), $id);

        Flash::success('Wishlist Item updated successfully.');

        return redirect(route('wishlistItems.index'));
    }

    /**
     * Remove the specified WishlistItem from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $wishlistItem = $this->wishlistItemRepository->find($id);

        if (empty($wishlistItem)) {
            Flash::error('Wishlist Item not found');

            return redirect(route('wishlistItems.index'));
        }

        $this->wishlistItemRepository->delete($id);

        Flash::success('Wishlist Item deleted successfully.');

        return redirect(route('wishlistItems.index'));
    }
}
