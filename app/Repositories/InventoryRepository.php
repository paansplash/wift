<?php

namespace App\Repositories;

use App\Models\Inventory;
use App\Repositories\BaseRepository;

class InventoryRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'price',
        'quantity',
        'user_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Inventory::class;
    }

    public function getInventories()
    {
        return Inventory::all();
    }
}
