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


Auth::routes();

Route::middleware(['role:Super Admin,Admin'])->prefix('admin')->group(function () {

    Route::resource('home', App\Http\Controllers\HomeController::class)->names('admin.home');
    Route::resource('users', App\Http\Controllers\UserController::class)->names('admin.users');
    Route::resource('roles', App\Http\Controllers\RoleController::class)->names('admin.roles');
    Route::resource('permissions', App\Http\Controllers\PermissionController::class)->names('admin.permissions');
    Route::resource('rolePermissions', App\Http\Controllers\RolePermissionController::class)->names('admin.rolePermissions');
    Route::resource('categories', App\Http\Controllers\CategoryController::class)->names('admin.categories');
    Route::resource('subcategories', App\Http\Controllers\SubcategoryController::class)->names('admin.subcategories');
    Route::resource('inventories', App\Http\Controllers\InventoryController::class)->names('admin.inventories');
    Route::resource('wishers', App\Http\Controllers\WisherController::class)->names('admin.wishers');
    Route::resource('wishlists', App\Http\Controllers\WishlistController::class)->names('admin.wishlists');
    Route::resource('wishlistItems', App\Http\Controllers\WishlistItemController::class)->names('admin.wishlistItems');
    Route::resource('orders', App\Http\Controllers\OrderController::class)->names('admin.orders');
    Route::resource('orderItems', App\Http\Controllers\OrderItemController::class)->names('admin.orderItems');
    Route::resource('deliveries', App\Http\Controllers\DeliveryController::class)->names('admin.deliveries');
    Route::resource('statuses', App\Http\Controllers\StatusController::class)->names('admin.statuses');
});


Route::middleware(['role:User'])->prefix('user')->group(function () {
    Route::resource('home', App\Http\Controllers\User\HomeController::class)->names('user.home');
    Route::resource('wishers', App\Http\Controllers\User\WisherController::class)->names('user.wishers');
    Route::resource('wishlists', App\Http\Controllers\User\WishlistController::class)->names('user.wishlists');
    Route::resource('wishlistItems', App\Http\Controllers\User\WishlistItemController::class)->names('user.wishlistItems');
});
