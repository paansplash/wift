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

/*************  ✨ Codeium Command ⭐  *************/
    /**
     * Retrieve all subcategories.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */

/******  840d1690-89e3-4b53-b16b-d3f8977862ea  *******/
    public function getSubcategories()
    {
        return Subcategory::all();
    }
}
