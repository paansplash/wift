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

class WizardController extends AppBaseController
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
}
