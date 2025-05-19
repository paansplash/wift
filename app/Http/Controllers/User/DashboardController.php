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
        $wishlist = $this->wishlistRepository->getLatestWishlist();
        return view('pages.user.dashboard', compact('wishlist'));
    }
} 