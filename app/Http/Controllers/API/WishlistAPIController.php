<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateWishlistAPIRequest;
use App\Http\Requests\API\UpdateWishlistAPIRequest;
use App\Models\Wishlist;
use App\Repositories\WishlistRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class WishlistAPIController
 */
class WishlistAPIController extends AppBaseController
{
    private WishlistRepository $wishlistRepository;

    public function __construct(WishlistRepository $wishlistRepo)
    {
        $this->wishlistRepository = $wishlistRepo;
    }

    /**
     * Display a listing of the Wishlists.
     * GET|HEAD /wishlists
     */
    public function index(Request $request): JsonResponse
    {
        $wishlists = $this->wishlistRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($wishlists->toArray(), 'Wishlists retrieved successfully');
    }

    /**
     * Store a newly created Wishlist in storage.
     * POST /wishlists
     */
    public function store(CreateWishlistAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $wishlist = $this->wishlistRepository->create($input);

        return $this->sendResponse($wishlist->toArray(), 'Wishlist saved successfully');
    }

    /**
     * Display the specified Wishlist.
     * GET|HEAD /wishlists/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var Wishlist $wishlist */
        $wishlist = $this->wishlistRepository->find($id);

        if (empty($wishlist)) {
            return $this->sendError('Wishlist not found');
        }

        return $this->sendResponse($wishlist->toArray(), 'Wishlist retrieved successfully');
    }

    /**
     * Update the specified Wishlist in storage.
     * PUT/PATCH /wishlists/{id}
     */
    public function update($id, UpdateWishlistAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Wishlist $wishlist */
        $wishlist = $this->wishlistRepository->find($id);

        if (empty($wishlist)) {
            return $this->sendError('Wishlist not found');
        }

        $wishlist = $this->wishlistRepository->update($input, $id);

        return $this->sendResponse($wishlist->toArray(), 'Wishlist updated successfully');
    }

    /**
     * Remove the specified Wishlist from storage.
     * DELETE /wishlists/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var Wishlist $wishlist */
        $wishlist = $this->wishlistRepository->find($id);

        if (empty($wishlist)) {
            return $this->sendError('Wishlist not found');
        }

        $wishlist->delete();

        return $this->sendSuccess('Wishlist deleted successfully');
    }
}
