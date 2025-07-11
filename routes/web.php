<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
})->name('welcome'); // Name the route "welcome"

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us'); // Name the route "about-us"

Route::get('/projects', function () {
    return view('projects');
})->name('projects'); // Name the route "projects"

Route::get('/services', function () {
    return view('services');
})->name('services'); // Name the route "services"

Route::get('/services-detail', function () {
    return view('services-detail');
})->name('services-detail'); // Name the route "services-detail"

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/contact', function () {
    return view('contact');
})->name('contact'); // Name the route "contact"

Route::get('/shop', function () {
    return view('user.shop.shop');
})->name('shop');


Route::resource('shop/home', App\Http\Controllers\Shop\ShopController::class)->names('shop');
Route::get('shop/cart', [App\Http\Controllers\Shop\ShopController::class, 'cart'])->name('shop.cart');
Route::get('shop/checkout', [App\Http\Controllers\Shop\ShopController::class, 'checkout'])->name('shop.checkout');
Route::get('shop/completed', [App\Http\Controllers\Shop\ShopController::class, 'completed'])->name('shop.completed');

// Public wishlist views and purchase flow
Route::get('/gift/{name}/{title}', [App\Http\Controllers\PublicWishlistController::class, 'show'])->name('public.wishlist.show');
Route::post('/gift/purchase/{item}', [App\Http\Controllers\PublicWishlistController::class, 'buy'])->name('public.wishlist.buy');

Route::get('/public/wishlist/checkout/{item}', [App\Http\Controllers\PublicWishlistController::class, 'checkout'])->name('public.wishlist.checkout');
Route::post('/public/wishlist/checkout/{item}', [App\Http\Controllers\PublicWishlistController::class, 'processCheckout'])->name('public.wishlist.processCheckout');

// Redirect URL: Billplz sends user here after payment
Route::get('/public/wishlist/payment/{order}', [App\Http\Controllers\PublicWishlistController::class, 'payment'])->name('public.wishlist.payment');

// Callback URL: Billplz server sends POST confirmation here
Route::post('/wishlist/payment-callback', [App\Http\Controllers\PublicWishlistController::class, 'paymentCallback'])->name('public.wishlist.paymentCallback');

Auth::routes();

Route::middleware(['role:Super Admin,Admin'])->prefix('admin')->group(function () {

    Route::resource('home', App\Http\Controllers\Admin\HomeController::class)->names('admin.home');
    Route::resource('users', App\Http\Controllers\Admin\UserController::class)->names('admin.users');
    Route::resource('roles', App\Http\Controllers\Admin\RoleController::class)->names('admin.roles');
    Route::resource('permissions', App\Http\Controllers\Admin\PermissionController::class)->names('admin.permissions');
    Route::resource('rolePermissions', App\Http\Controllers\Admin\RolePermissionController::class)->names('admin.rolePermissions');
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class)->names('admin.categories');
    Route::resource('subcategories', App\Http\Controllers\Admin\SubcategoryController::class)->names('admin.subcategories');
    Route::resource('inventories', App\Http\Controllers\Admin\InventoryController::class)->names('admin.inventories');
    Route::resource('wishers', App\Http\Controllers\Admin\WisherController::class)->names('admin.wishers');
    Route::resource('wishlists', App\Http\Controllers\Admin\WishlistController::class)->names('admin.wishlists');
    Route::resource('wishlistItems', App\Http\Controllers\Admin\WishlistItemController::class)->names('admin.wishlistItems');
    Route::resource('orders', App\Http\Controllers\Admin\OrderController::class)->names('admin.orders');
    Route::resource('orderItems', App\Http\Controllers\Admin\OrderItemController::class)->names('admin.orderItems');
    Route::resource('deliveries', App\Http\Controllers\Admin\DeliveryController::class)->names('admin.deliveries');
    Route::resource('statuses', App\Http\Controllers\Admin\StatusController::class)->names('admin.statuses');
});


Route::middleware(['role:User'])->prefix('user')->group(function () {
    Route::resource('home', App\Http\Controllers\User\HomeController::class)->names('user.home');
    Route::resource('dashboard', App\Http\Controllers\User\DashboardController::class)->names('user.dashboard');
    Route::resource('wishers', App\Http\Controllers\User\WisherController::class)->names('user.wishers');
    Route::resource('wishlists', App\Http\Controllers\User\WishlistController::class)->names('user.wishlists');
    Route::resource('wishlistItems', App\Http\Controllers\User\WishlistItemController::class)->names('user.wishlistItems');
});
