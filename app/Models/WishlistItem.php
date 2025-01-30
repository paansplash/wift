<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WishlistItem extends Model
{
    public $table = 'wishlist_items';

    public $fillable = [
        'wishlist_id',
        'inventory_id',
        'status_id'
    ];

    protected $casts = [
        
    ];

    public static array $rules = [
        'wishlist_id' => 'required',
        'inventory_id' => 'required',
        'status_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function inventory(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Inventory::class, 'inventory_id');
    }

    public function status(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Status::class, 'status_id');
    }

    public function wishlist(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Wishlist::class, 'wishlist_id');
    }
}
