<?php

namespace App\Repositories;

use App\Models\Wisher;
use App\Repositories\BaseRepository;

class WisherRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'name',
        'phone_no',
        'addr1',
        'addr2',
        'addr3',
        'postcode',
        'city',
        'state'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Wisher::class;
    }

    public function getWishers()
    {
        return Wisher::all();
    }

    public function count()
    {
        return Wisher::count();
    }
}
