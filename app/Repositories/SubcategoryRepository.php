<?php

namespace App\Repositories;

use App\Models\Subcategory;
use App\Repositories\BaseRepository;

class SubcategoryRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'category_id',
        'description',
        'status_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Subcategory::class;
    }
}
