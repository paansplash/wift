<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateWizardRequest;
use App\Repositories\InventoryRepository;
use App\Repositories\StatusRepository;
use App\Repositories\SubcategoryRepository;
use App\Repositories\UserRepository;
use App\Repositories\WisherRepository;
use App\Repositories\WishlistItemRepository;
use App\Repositories\WishlistRepository;
use App\Repositories\WizardRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class WizardController extends AppBaseController
{
    /** @var InventoryRepository $inventoryRepository*/
    private $inventoryRepository;
    private $userRepository;
    private $statusRepository;
    private $wisherRepository;
    private $wishlistRepository;
    private $wishlistItemRepository;
    private $wizardRepository;

    public function __construct(
        InventoryRepository $inventoryRepo,
        UserRepository $userRepo,
        StatusRepository $statusRepo,
        WisherRepository $wisherRepo,
        WishlistRepository $wishlistRepo,
        WishlistItemRepository $wishlistItemRepo,
        WizardRepository $wizardRepo
    ) {
        $this->inventoryRepository = $inventoryRepo;
        $this->userRepository = $userRepo;
        $this->statusRepository = $statusRepo;
        $this->wisherRepository = $wisherRepo;
        $this->wishlistRepository = $wishlistRepo;
        $this->wishlistItemRepository = $wishlistItemRepo;
        $this->wizardRepository = $wizardRepo;
    }

    /**
     * Display a listing of the Inventory.
     */
    public function index(Request $request)
    {
        $users = $this->userRepository->getUsers();
        $inventories = $this->inventoryRepository->paginate(10);
        $wishers = $this->wisherRepository->getWishers();
        $wishlists = $this->wishlistRepository->getWishlists();
        $wishlistItems = $this->wishlistItemRepository->getWishlistItems();
        $statuses = $this->statusRepository->getActivityStatuses();

        return view('pages.wizard.form', compact(
            'inventories',
            'users',
            'wishers',
            'wishlists',
            'wishlistItems',
            'statuses'
        ));
    }

    public function store(CreateWizardRequest $request)
    {
        $this->wizardRepository->create($request->validated());

        Flash::success('Wizard saved successfully.');

        return redirect(route('wishers.index'));
    }
}
