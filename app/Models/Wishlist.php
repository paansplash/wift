<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    public $table = 'wishlists';

    public $fillable = [
        'user_id',
        'title',
        'description'
    ];

    protected $casts = [
        'title' => 'string',
        'description' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'required',
        'title' => 'required|string|max:255',
        'description' => 'nullable|string|max:65535',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function orders(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Order::class, 'wishlist_id');
    }

    public function wishlistItems(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\WishlistItem::class, 'wishlist_id');
    }
}
