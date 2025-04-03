<?php

namespace App\Services\Admin;

use App\Repositories\CategoryRepository;
use App\Repositories\SubcategoryRepository;
use App\Repositories\StatusRepository;
use Illuminate\Support\Facades\DB;

class CategoryService
{
    public function __construct(
        private CategoryRepository $categoryRepository,
        private SubcategoryRepository $subcategoryRepository,
        private StatusRepository $statusRepository
    ) {}

    public function getPaginatedCategories($perPage = 10)
    {
        return $this->categoryRepository->allQuery()
            ->with(['subcategories'])
            ->paginate($perPage);
    }

    public function createCategory(array $data)
    {
        return $this->categoryRepository->create($data);
    }

    public function updateCategory($id, array $data)
    {
        return $this->categoryRepository->update($data, $id);
    }

    public function deleteCategory($id)
    {
        return DB::transaction(function () use ($id) {
            // Delete all subcategories first
            $this->subcategoryRepository->allQuery()
                ->where('category_id', $id)
                ->delete();

            // Then delete the category
            return $this->categoryRepository->delete($id);
        });
    }

    public function getAllCategoriesForDropdown()
    {
        return $this->categoryRepository->allQuery()
            ->orderBy('name')
            ->get();
    }

    public function getAllStatuses()
    {
        return $this->statusRepository->allQuery()
            ->orderBy('name')
            ->get();
    }

    public function getCategory($id)
    {
        return $this->categoryRepository->find($id);
    }
} 