<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWishlistItemRequest;
use App\Http\Requests\UpdateWishlistItemRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\WishlistItemRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class WishlistItemController extends AppBaseController
{
    /** @var WishlistItemRepository $wishlistItemRepository*/
    private $wishlistItemRepository;

    public function __construct(WishlistItemRepository $wishlistItemRepo)
    {
        $this->wishlistItemRepository = $wishlistItemRepo;
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
        return view('pages.admin.wishlist_items.create');
    }

    /**
     * Store a newly created WishlistItem in storage.
     */
    public function store(CreateWishlistItemRequest $request)
    {
        $input = $request->all();

        $wishlistItem = $this->wishlistItemRepository->create($input);

        Flash::success('Wishlist Item saved successfully.');

        return redirect(route('wishlistItems.index'));
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
