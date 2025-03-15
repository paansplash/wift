<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    public $table = 'inventories';

    public $fillable = [
        'name',
        'price',
        'quantity',
        'user_id',
        'subcategory_id',
        'status_id',
        'image'
    ];

    protected $casts = [
        'name' => 'string',
        'price' => 'decimal:2'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'quantity' => 'nullable',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'user_id' => 'nullable',
        'subcategory_id' => 'required',
        'status_id' => 'required',
        'image' => 'nullable|image|mimes:jpeg,jpg,png,gif',
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function orderItems(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\OrderItem::class, 'inventory_id');
    }

    public function wishlistItems(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\WishlistItem::class, 'inventory_id');
    }

    public function subcategory(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Subcategory::class, 'subcategory_id');
    }

    public function status(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Status::class, 'status_id');
    }
}
