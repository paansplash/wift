<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\AppBaseController;
use App\Repositories\WishlistRepository;

class ShopController extends AppBaseController
{
    private $wishlistRepository;

    public function __construct(WishlistRepository $wishlistRepo)
    {
        $this->wishlistRepository = $wishlistRepo;
    }

    public function index()
    {
        return view('shop.shop');
       
    }

    public function completed()
    {
        return view('shop.completed');
    }

    public function checkout()
    {
        return view('shop.checkout');
    }

    public function cart()
    {
        return view('shop.cart');
    }
}
