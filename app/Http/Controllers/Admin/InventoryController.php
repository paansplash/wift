<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;
use App\Http\Controllers\AppBaseController;
use App\Services\Admin\InventoryService;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class InventoryController extends AppBaseController
{
    /** @var InventoryService $inventoryService*/
    private $inventoryService;

    public function __construct(InventoryService $inventoryService)
    {
        $this->inventoryService = $inventoryService;
    }

    /**
     * Display a listing of the Inventory.
     */
    public function index(Request $request)
    {
        $inventories = $this->inventoryService->getPaginatedInventories();

        return view('admin.inventories.index')
            ->with('inventories', $inventories);
    }

    /**
     * Show the form for creating a new Inventory.
     */
    public function create()
    {
        $subcategories = $this->inventoryService->getAllSubcategoriesForDropdown();
        $users = $this->inventoryService->getAllUsersForDropdown();
        $statuses = $this->inventoryService->getAllStatusesForDropdown();

        return view('admin.inventories.create', compact('subcategories', 'users', 'statuses'));
    }

    /**
     * Store a newly created Inventory in storage.
     */
    public function store(CreateInventoryRequest $request)
    {
        $inventory = $this->inventoryService->createInventory($request->all());

        Flash::success('Inventory saved successfully.');

        return redirect(route('admin.inventories.index'));
    }

    /**
     * Display the specified Inventory.
     */
    public function show($id)
    {
        $inventory = $this->inventoryService->getInventory($id);

        if (empty($inventory)) {
            Flash::error('Inventory not found');
            return redirect(route('admin.inventories.index'));
        }

        return view('admin.inventories.show')->with('inventory', $inventory);
    }

    /**
     * Show the form for editing the specified Inventory.
     */
    public function edit($id)
    {
        $inventory = $this->inventoryService->getInventory($id);
        $subcategories = $this->inventoryService->getAllSubcategoriesForDropdown();
        $users = $this->inventoryService->getAllUsersForDropdown();
        $statuses = $this->inventoryService->getAllStatusesForDropdown();

        if (empty($inventory)) {
            Flash::error('Inventory not found');
            return redirect(route('admin.inventories.index'));
        }

        return view('admin.inventories.edit', compact('inventory', 'subcategories', 'users', 'statuses'));
    }

    /**
     * Update the specified Inventory in storage.
     */
    public function update($id, UpdateInventoryRequest $request)
    {
        $inventory = $this->inventoryService->updateInventory($id, $request->all());

        if (empty($inventory)) {
            Flash::error('Inventory not found');
            return redirect(route('admin.inventories.index'));
        }

        Flash::success('Inventory updated successfully.');
        return redirect(route('admin.inventories.index'));
    }

    /**
     * Remove the specified Inventory from storage.
     */
    public function destroy($id)
    {
        $result = $this->inventoryService->deleteInventory($id);

        if (!$result) {
            Flash::error('Inventory not found');
            return redirect(route('admin.inventories.index'));
        }

        Flash::success('Inventory deleted successfully.');
        return redirect(route('admin.inventories.index'));
    }
}
