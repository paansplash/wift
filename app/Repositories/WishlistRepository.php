<?php

namespace App\Repositories;

use App\Models\Wishlist;
use App\Repositories\BaseRepository;

class WishlistRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'title',
        'description'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Wishlist::class;
    }

    public function getWishlists()
    {
        return Wishlist::all();
    }

    public function getLatestWishlist()
    {
        return Wishlist::whereHas('wisher', function ($query) {
            $query->where('user_id', auth()->id());
        })->latest()->first();
    }
}
