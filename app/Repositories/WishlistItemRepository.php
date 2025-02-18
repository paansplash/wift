<?php

namespace App\Repositories;

use App\Models\WishlistItem;
use App\Repositories\BaseRepository;

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
}
