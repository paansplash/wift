<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'orders';

    public $fillable = [
        'wishlist_id',
        'amount',
        'status_id',
        'name',
        'note'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'name' => 'string',
        'note' => 'string'
    ];

    public static array $rules = [
        'wishlist_id' => 'required',
        'amount' => 'required|numeric',
        'status_id' => 'nullable',
        'name' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'note' => 'nullable|string|max:65535'
    ];

    public function status(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Status::class, 'status_id');
    }

    public function wishlist(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Wishlist::class, 'wishlist_id');
    }

    public function deliveries(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Delivery::class, 'order_id');
    }

    public function orderItems(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\OrderItem::class, 'order_id');
    }
}
