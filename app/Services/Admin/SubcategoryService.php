<?php

namespace App\Services\Admin;

use App\Repositories\SubcategoryRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\StatusRepository;
use Illuminate\Support\Facades\DB;

class SubcategoryService
{
    public function __construct(
        private SubcategoryRepository $subcategoryRepository,
        private CategoryRepository $categoryRepository,
        private StatusRepository $statusRepository
    ) {}

    public function getPaginatedSubcategories($perPage = 10)
    {
        return $this->subcategoryRepository->allQuery()
            ->with(['category'])
            ->paginate($perPage);
    }

    public function createSubcategory(array $data)
    {
        return $this->subcategoryRepository->create($data);
    }

    public function updateSubcategory($id, array $data)
    {
        return $this->subcategoryRepository->update($data, $id);
    }

    public function deleteSubcategory($id)
    {
        return DB::transaction(function () use ($id) {
            // Check if subcategory has any inventories
            $subcategory = $this->subcategoryRepository->find($id);
            if ($subcategory->inventories()->exists()) {
                throw new \Exception('Cannot delete subcategory with associated inventories');
            }

            return $this->subcategoryRepository->delete($id);
        });
    }

    public function getAllSubcategoriesForDropdown()
    {
        return $this->subcategoryRepository->allQuery()
            ->orderBy('name')
            ->get();
    }

    public function getSubcategoriesByCategory($categoryId)
    {
        return $this->subcategoryRepository->allQuery()
            ->where('category_id', $categoryId)
            ->orderBy('name')
            ->get();
    }

    public function getAllStatuses()
    {
        return $this->statusRepository->allQuery()
            ->orderBy('name')
            ->get();
    }

    public function getSubcategory($id)
    {
        return $this->subcategoryRepository->find($id);
    }
} 