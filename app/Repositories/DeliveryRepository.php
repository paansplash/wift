<?php

namespace App\Repositories;

use App\Models\Delivery;
use App\Repositories\BaseRepository;

class DeliveryRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'order_item_id',
        'status_id',
        'user_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Delivery::class;
    }

    public function count()
    {
        return Delivery::where('status_id', '=', 4)->count();
        

    }
}
