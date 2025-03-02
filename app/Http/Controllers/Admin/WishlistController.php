<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateWishlistRequest;
use App\Http\Requests\UpdateWishlistRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\wisherRepository;
use App\Repositories\WishlistRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class WishlistController extends AppBaseController
{
    /** @var WishlistRepository $wishlistRepository*/
    private $wishlistRepository;
    private $wisherRepository;

    public function __construct(WishlistRepository $wishlistRepo, wisherRepository $wisherRepo)
    {
        $this->wishlistRepository = $wishlistRepo;
        $this->wisherRepository = $wisherRepo;
    }

    /**
     * Display a listing of the Wishlist.
     */
    public function index(Request $request)
    {
        $wishlists = $this->wishlistRepository->paginate(10);

        return view('pages.admin.wishlists.index')
            ->with('wishlists', $wishlists);
    }

    /**
     * Show the form for creating a new Wishlist.
     */
    public function create()
    {
        $wishers = $this->wisherRepository->getWishers();

        return view('pages.admin.wishlists.create', compact('wishers'));
    }

    /**
     * Store a newly created Wishlist in storage.
     */
    public function store(CreateWishlistRequest $request)
    {
        $input = $request->all();

        $wishlist = $this->wishlistRepository->create($input);

        Flash::success('Wishlist saved successfully.');

        return redirect(route('wishlistItems.create'));
    }

    /**
     * Display the specified Wishlist.
     */
    public function show($id)
    {
        $wishlist = $this->wishlistRepository->find($id);

        if (empty($wishlist)) {
            Flash::error('Wishlist not found');

            return redirect(route('wishlists.index'));
        }

        return view('pages.admin.wishlists.show')->with('wishlist', $wishlist);
    }

    /**
     * Show the form for editing the specified Wishlist.
     */
    public function edit($id)
    {
        $wishlist = $this->wishlistRepository->find($id);
        $wishers = $this->wisherRepository->getWishers();

        if (empty($wishlist)) {
            Flash::error('Wishlist not found');

            return redirect(route('wishlists.index'));
        }

        return view('pages.admin.wishlists.edit', compact('wishlist', 'wishers'));
    }

    /**
     * Update the specified Wishlist in storage.
     */
    public function update($id, UpdateWishlistRequest $request)
    {
        $wishlist = $this->wishlistRepository->find($id);

        if (empty($wishlist)) {
            Flash::error('Wishlist not found');

            return redirect(route('wishlists.index'));
        }

        $wishlist = $this->wishlistRepository->update($request->all(), $id);

        Flash::success('Wishlist updated successfully.');

        return redirect(route('wishlists.index'));
    }

    /**
     * Remove the specified Wishlist from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $wishlist = $this->wishlistRepository->find($id);

        if (empty($wishlist)) {
            Flash::error('Wishlist not found');

            return redirect(route('wishlists.index'));
        }

        $this->wishlistRepository->delete($id);

        Flash::success('Wishlist deleted successfully.');

        return redirect(route('wishlists.index'));
    }
}
