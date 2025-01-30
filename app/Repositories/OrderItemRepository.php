<?php

namespace App\Repositories;

use App\Models\OrderItem;
use App\Repositories\BaseRepository;

class OrderItemRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'order_id',
        'inventory_id',
        'price',
        'quantity'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return OrderItem::class;
    }
}
