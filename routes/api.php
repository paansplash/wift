<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('categories', App\Http\Controllers\API\CategoryAPIController::class)
    ->except(['create', 'edit']);

Route::resource('subcategories', App\Http\Controllers\API\SubcategoryAPIController::class)
    ->except(['create', 'edit']);

Route::resource('users', App\Http\Controllers\API\UserAPIController::class)
    ->except(['create', 'edit']);

Route::resource('roles', App\Http\Controllers\API\RoleAPIController::class)
    ->except(['create', 'edit']);

Route::resource('wishlist-items', App\Http\Controllers\API\WishlistItemAPIController::class)
    ->except(['create', 'edit']);

Route::resource('wishlists', App\Http\Controllers\API\WishlistAPIController::class)
    ->except(['create', 'edit']);

Route::resource('orders', App\Http\Controllers\API\OrderAPIController::class)
    ->except(['create', 'edit']);

Route::resource('order-items', App\Http\Controllers\API\OrderItemAPIController::class)
    ->except(['create', 'edit']);

Route::resource('inventories', App\Http\Controllers\API\InventoryAPIController::class)
    ->except(['create', 'edit']);

Route::resource('permissions', App\Http\Controllers\API\PermissionAPIController::class)
    ->except(['create', 'edit']);

Route::resource('role-permissions', App\Http\Controllers\API\RolePermissionAPIController::class)
    ->except(['create', 'edit']);

Route::resource('statuses', App\Http\Controllers\API\StatusAPIController::class)
    ->except(['create', 'edit']);

Route::resource('deliveries', App\Http\Controllers\API\DeliveryAPIController::class)
    ->except(['create', 'edit']);

Route::resource('wishers', App\Http\Controllers\API\WisherAPIController::class)
    ->except(['create', 'edit']);