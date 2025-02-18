<?php

namespace App\Repositories;

use App\Models\Wisher;
use Illuminate\Support\Facades\DB;

class WizardRepository
{
    public function create(array $data)
    {
        return DB::transaction(function () use ($data) {
            // Create Wisher
            $wisher = Wisher::create($data);

            // Create Wishlist
            $wishlist = $wisher->wishlists()->create([
                'title' => $data['title'],
                'description' => $data['description'] ?? null,
            ]);

            // Create Wishlist Items if provided
            if (!empty($data['wishlist_items'])) {
                $wishlist->wishlistItems()->createMany($data['wishlist_items']);
            }

            return $wisher; // Return the created Wisher (or adjust as needed)
        });
    }
}
