<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\DeliveryRepository;
use App\Repositories\InventoryRepository;
use App\Repositories\UserRepository;
use App\Repositories\WisherRepository;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $wisherRepository;
    private $userRepository;
    private $inventoryRepository;
    private $deliveryRepository;

    public function __construct(WisherRepository $wisherRepo, UserRepository $userRepo, 
    InventoryRepository $inventoryRepo, DeliveryRepository $deliveryRepo)
    {
        $this->middleware('auth');

        $this->wisherRepository = $wisherRepo;
        $this->userRepository = $userRepo;
        $this->inventoryRepository = $inventoryRepo;
        $this->deliveryRepository = $deliveryRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalWishers = $this->wisherRepository->count();
        $totalRegisteredUsers = $this->userRepository->count();
        $totalInventories = $this->inventoryRepository->count();
        $totalDelivered = $this->deliveryRepository->count();

        return view('admin.home', compact('totalWishers', 'totalRegisteredUsers', 'totalInventories', 'totalDelivered'));
    }
}
