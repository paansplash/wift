<?php

namespace App\Repositories;

use App\Models\Status;
use App\Repositories\BaseRepository;

class StatusRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Status::class;
    }

    public function getActivityStatuses()
    {
        return Status::whereIn('id', [1, 2])->get();
    }

    public function getDeliveryStatuses()
    {
        return Status::whereIn('id', [3, 4])->get();
    }
}
