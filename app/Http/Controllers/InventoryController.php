<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\InventoryRepository;
use App\Repositories\StatusRepository;
use App\Repositories\SubcategoryRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class InventoryController extends AppBaseController
{
    /** @var InventoryRepository $inventoryRepository*/
    private $inventoryRepository;
    private $subcategoryRepository;
    private $userRepository;
    private $statusRepository;

    public function __construct(InventoryRepository $inventoryRepo, SubcategoryRepository $subcategoryRepo, 
    UserRepository $userRepo, StatusRepository $statusRepo)
    {
        $this->inventoryRepository = $inventoryRepo;
        $this->subcategoryRepository = $subcategoryRepo;
        $this->userRepository = $userRepo;
        $this->statusRepository = $statusRepo;
    }

    /**
     * Display a listing of the Inventory.
     */
    public function index(Request $request)
    {
        $inventories = $this->inventoryRepository->paginate(10);

        return view('pages.admin.inventories.index')
            ->with('inventories', $inventories);
    }

    /**
     * Show the form for creating a new Inventory.
     */
    public function create()
    {
        $subcategories = $this->subcategoryRepository->getSubcategories();
        $users = $this->userRepository->getAllUsers();
        $statuses = $this->statusRepository->getActivityStatuses();

        return view('pages.admin.inventories.create', compact('subcategories', 'users', 'statuses'));
    }

    /**
     * Store a newly created Inventory in storage.
     */
    public function store(CreateInventoryRequest $request)
    {
        $input = $request->all();

        $inventory = $this->inventoryRepository->create($input);

        Flash::success('Inventory saved successfully.');

        return redirect(route('inventories.index'));
    }

    /**
     * Display the specified Inventory.
     */
    public function show($id)
    {
        $inventory = $this->inventoryRepository->find($id);

        if (empty($inventory)) {
            Flash::error('Inventory not found');

            return redirect(route('inventories.index'));
        }

        return view('pages.admin.inventories.show')->with('inventory', $inventory);
    }

    /**
     * Show the form for editing the specified Inventory.
     */
    public function edit($id)
    {
        $inventory = $this->inventoryRepository->find($id);
        $statuses = $this->statusRepository->getActivityStatuses();

        if (empty($inventory)) {
            Flash::error('Inventory not found');

            return redirect(route('inventories.index'));
        }

        return view('pages.admin.inventories.edit', compact('inventory', 'statuses'));
    }

    /**
     * Update the specified Inventory in storage.
     */
    public function update($id, UpdateInventoryRequest $request)
    {
        $inventory = $this->inventoryRepository->find($id);

        if (empty($inventory)) {
            Flash::error('Inventory not found');

            return redirect(route('inventories.index'));
        }

        $inventory = $this->inventoryRepository->update($request->all(), $id);

        Flash::success('Inventory updated successfully.');

        return redirect(route('inventories.index'));
    }

    /**
     * Remove the specified Inventory from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inventory = $this->inventoryRepository->find($id);

        if (empty($inventory)) {
            Flash::error('Inventory not found');

            return redirect(route('inventories.index'));
        }

        $this->inventoryRepository->delete($id);

        Flash::success('Inventory deleted successfully.');

        return redirect(route('inventories.index'));
    }
}
