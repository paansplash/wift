<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    public $table = 'order_items';

    public $fillable = [
        'order_id',
        'wishlist_item_id',
        'price',
        'quantity'
    ];

    protected $casts = [
        'price' => 'decimal:2'
    ];

    public static array $rules = [
        'order_id' => 'required',
        'wishlist_item_id' => 'required',
        'price' => 'required|numeric',
        'quantity' => 'nullable',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function wishlistItem(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\WishlistItem::class, 'wishlist_item_id');
    }

    public function order(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Order::class, 'order_id');
    }
}
