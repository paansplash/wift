<?php

namespace App\Repositories;

use App\Models\WishlistItem;
use App\Models\Wishlist;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Log;

class WishlistItemRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'wishlist_id',
        'inventory_id',
        'status_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return WishlistItem::class;
    }

    public function getWishlistItems()
    {
        return WishlistItem::all();
    }

    public function getUserWishlistItems($userId)
    {
        return WishlistItem::whereHas('wishlist', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->with('inventory')->get();
    }

    public function existsInWishlist($wishlistId, $inventoryId)
    {
        return WishlistItem::where('wishlist_id', $wishlistId)
            ->where('inventory_id', $inventoryId)
            ->exists();
    }

    public function addToLatestUserWishlist($inventoryId)
    {
        $userId = auth()->id();
        Log::info('Starting addToLatestUserWishlist()', ['user_id' => $userId, 'inventory_id' => $inventoryId]);

        // Step 1: Get latest wishlist for the user
        $wishlist = Wishlist::where('user_id', $userId)->latest()->first();
        Log::info('Fetched latest wishlist', ['wishlist' => $wishlist]);

        if (!$wishlist) {
            Log::warning('No wishlist found for user.', ['user_id' => $userId]);
            throw new \Exception("No wishlist found for the user.");
        }

        // Step 2: Check for duplicate
        $exists = $this->existsInWishlist($wishlist->id, $inventoryId);
        Log::info('Checked for existing wishlist item', ['exists' => $exists]);

        if ($exists) {
            Log::notice('Item already exists in wishlist.', ['wishlist_id' => $wishlist->id, 'inventory_id' => $inventoryId]);
            throw new \Exception("This item is already in your wishlist.");
        }

        // Step 3: Insert item
        $item = WishlistItem::create([
            'wishlist_id' => $wishlist->id,
            'inventory_id' => $inventoryId,
            'status_id' => 5,
        ]);

        Log::info('Wishlist item created successfully.', ['wishlist_item' => $item]);

        return $item;
    }
}
