<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::middleware(['role:Super Admin,Admin'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::resource('rolePermissions', App\Http\Controllers\RolePermissionController::class);
    Route::resource('categories', App\Http\Controllers\CategoryController::class);
    Route::resource('subcategories', App\Http\Controllers\SubcategoryController::class);
    Route::resource('inventories', App\Http\Controllers\InventoryController::class);
    Route::resource('wishlists', App\Http\Controllers\WishlistController::class);
    Route::resource('wishlistItems', App\Http\Controllers\WishlistItemController::class);
    Route::resource('orders', App\Http\Controllers\OrderController::class);
    Route::resource('orderItems', App\Http\Controllers\OrderItemController::class);
    Route::resource('deliveries', App\Http\Controllers\DeliveryController::class);
    Route::resource('statuses', App\Http\Controllers\StatusController::class);
});


Route::middleware(['role:User'])->group(function () {
    Route::resource('home', App\Http\Controllers\User\HomeController::class)->names('user.home');
    Route::resource('wishers', App\Http\Controllers\User\WisherController::class);
    Route::resource('wishlists', App\Http\Controllers\User\WishlistController::class);
    Route::resource('wishlistItems', App\Http\Controllers\User\WishlistItemController::class);
});
