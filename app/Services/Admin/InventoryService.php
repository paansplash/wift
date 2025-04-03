<?php

namespace App\Services\Admin;

use App\Repositories\InventoryRepository;
use App\Repositories\SubcategoryRepository;
use App\Repositories\UserRepository;
use App\Repositories\StatusRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class InventoryService
{
    public function __construct(
        private InventoryRepository $inventoryRepository,
        private SubcategoryRepository $subcategoryRepository,
        private UserRepository $userRepository,
        private StatusRepository $statusRepository
    ) {}

    /**
     * Get paginated inventories with their relationships
     */
    public function getPaginatedInventories($perPage = 10)
    {
        return $this->inventoryRepository->allQuery()
            ->with(['subcategory', 'user', 'status'])
            ->paginate($perPage);
    }

    /**
     * Get a single inventory by ID
     */
    public function getInventory($id)
    {
        return $this->inventoryRepository->allQuery()
            ->with(['subcategory', 'user', 'status'])
            ->find($id);
    }

    /**
     * Create a new inventory
     */
    public function createInventory(array $data)
    {
        return DB::transaction(function () use ($data) {
            if (isset($data['image']) && $data['image']) {
                $data['image'] = $this->handleImageUpload($data['image']);
            }

            return $this->inventoryRepository->create($data);
        });
    }

    /**
     * Update inventory
     */
    public function updateInventory($id, array $data)
    {
        return DB::transaction(function () use ($id, $data) {
            $inventory = $this->inventoryRepository->find($id);

            if (isset($data['image']) && $data['image']) {
                // Delete old image if exists
                if ($inventory->image) {
                    Storage::disk('public')->delete($inventory->image);
                }
                $data['image'] = $this->handleImageUpload($data['image']);
            }

            return $this->inventoryRepository->update($data, $id);
        });
    }

    /**
     * Delete inventory
     */
    public function deleteInventory($id)
    {
        return DB::transaction(function () use ($id) {
            $inventory = $this->inventoryRepository->find($id);
            
            if (!$inventory) {
                return false;
            }

            // Delete inventory image if exists
            if ($inventory->image) {
                Storage::disk('public')->delete($inventory->image);
            }

            return $this->inventoryRepository->delete($id);
        });
    }

    /**
     * Handle image upload
     */
    protected function handleImageUpload($image)
    {
        if (!$image) {
            return null;
        }

        $fileName = time() . '_' . $image->getClientOriginalName();
        $path = $image->storeAs('inventories', $fileName, 'public');
        
        return $path;
    }

    /**
     * Get all subcategories for dropdown
     */
    public function getAllSubcategoriesForDropdown()
    {
        return $this->subcategoryRepository->allQuery()
            ->orderBy('name')
            ->get();
    }

    /**
     * Get all users for dropdown
     */
    public function getAllUsersForDropdown()
    {
        return $this->userRepository->allQuery()
            ->orderBy('name')
            ->get();
    }

    /**
     * Get all statuses for dropdown
     */
    public function getAllStatusesForDropdown()
    {
        return $this->statusRepository->allQuery()
            ->orderBy('name')
            ->get();
    }
} 