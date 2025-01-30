<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    public $table = 'order_items';

    public $fillable = [
        'order_id',
        'inventory_id',
        'price',
        'quantity'
    ];

    protected $casts = [
        'price' => 'decimal:2'
    ];

    public static array $rules = [
        'order_id' => 'required',
        'inventory_id' => 'required',
        'price' => 'required|numeric',
        'quantity' => 'nullable',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function inventory(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Inventory::class, 'inventory_id');
    }

    public function order(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Order::class, 'order_id');
    }
}
