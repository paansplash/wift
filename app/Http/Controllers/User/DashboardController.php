<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\AppBaseController;
use App\Repositories\WishlistRepository;
use Illuminate\Http\Request;

class DashboardController extends AppBaseController
{
    private $wishlistRepository;

    public function __construct(WishlistRepository $wishlistRepo)
    {
        $this->middleware('auth');
        $this->wishlistRepository = $wishlistRepo;
    }

    public function index()
    {
        $user = auth()->user();

        // Get the latest wishlist with related items and their relationships
        $wishlist = $this->wishlistRepository->getLatestWishlist([
            'wishlistItems.inventory.subcategory',
            'wishlistItems.status',
        ]);

        // Calculate progress metrics
        $totalItems = $wishlist?->wishlistItems->count() ?? 0;
        $completedItems = $wishlist?->wishlistItems->where('status_id', 3)->count() ?? 0;
        $progressPercentage = $totalItems > 0 ? ($completedItems / $totalItems) * 100 : 0;

        // Pass data to view
        return view('user.dashboard', compact(
            'user',
            'wishlist',
            'totalItems',
            'completedItems',
            'progressPercentage'
        ));
    }

    public function create()
    {
        return view('shop.shop');
    }
}
