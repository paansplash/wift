<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'description',
        'status_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Category::class;
    }

    public function getCategories()
    {
        return Category::all();
    }
}
