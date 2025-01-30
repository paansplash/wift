<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateWishlistItemAPIRequest;
use App\Http\Requests\API\UpdateWishlistItemAPIRequest;
use App\Models\WishlistItem;
use App\Repositories\WishlistItemRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class WishlistItemAPIController
 */
class WishlistItemAPIController extends AppBaseController
{
    private WishlistItemRepository $wishlistItemRepository;

    public function __construct(WishlistItemRepository $wishlistItemRepo)
    {
        $this->wishlistItemRepository = $wishlistItemRepo;
    }

    /**
     * Display a listing of the WishlistItems.
     * GET|HEAD /wishlist-items
     */
    public function index(Request $request): JsonResponse
    {
        $wishlistItems = $this->wishlistItemRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($wishlistItems->toArray(), 'Wishlist Items retrieved successfully');
    }

    /**
     * Store a newly created WishlistItem in storage.
     * POST /wishlist-items
     */
    public function store(CreateWishlistItemAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $wishlistItem = $this->wishlistItemRepository->create($input);

        return $this->sendResponse($wishlistItem->toArray(), 'Wishlist Item saved successfully');
    }

    /**
     * Display the specified WishlistItem.
     * GET|HEAD /wishlist-items/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var WishlistItem $wishlistItem */
        $wishlistItem = $this->wishlistItemRepository->find($id);

        if (empty($wishlistItem)) {
            return $this->sendError('Wishlist Item not found');
        }

        return $this->sendResponse($wishlistItem->toArray(), 'Wishlist Item retrieved successfully');
    }

    /**
     * Update the specified WishlistItem in storage.
     * PUT/PATCH /wishlist-items/{id}
     */
    public function update($id, UpdateWishlistItemAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var WishlistItem $wishlistItem */
        $wishlistItem = $this->wishlistItemRepository->find($id);

        if (empty($wishlistItem)) {
            return $this->sendError('Wishlist Item not found');
        }

        $wishlistItem = $this->wishlistItemRepository->update($input, $id);

        return $this->sendResponse($wishlistItem->toArray(), 'WishlistItem updated successfully');
    }

    /**
     * Remove the specified WishlistItem from storage.
     * DELETE /wishlist-items/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var WishlistItem $wishlistItem */
        $wishlistItem = $this->wishlistItemRepository->find($id);

        if (empty($wishlistItem)) {
            return $this->sendError('Wishlist Item not found');
        }

        $wishlistItem->delete();

        return $this->sendSuccess('Wishlist Item deleted successfully');
    }
}
