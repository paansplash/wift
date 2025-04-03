<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Admin\AdminService;
use App\Services\Admin\CategoryService;
use App\Services\Admin\SubcategoryService;
use App\Services\Admin\InventoryService;
use App\Repositories\UserRepository;
use App\Repositories\RoleRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\SubcategoryRepository;
use App\Repositories\InventoryRepository;
use App\Repositories\StatusRepository;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Register AdminService
        $this->app->singleton(AdminService::class, function ($app) {
            return new AdminService(
                $app->make(UserRepository::class),
                $app->make(RoleRepository::class)
            );
        });

        // Register CategoryService
        $this->app->singleton(CategoryService::class, function ($app) {
            return new CategoryService(
                $app->make(CategoryRepository::class),
                $app->make(SubcategoryRepository::class),
                $app->make(StatusRepository::class)
            );
        });

        // Register SubcategoryService
        $this->app->singleton(SubcategoryService::class, function ($app) {
            return new SubcategoryService(
                $app->make(SubcategoryRepository::class),
                $app->make(CategoryRepository::class),
                $app->make(StatusRepository::class)
            );
        });

        // Register InventoryService
        $this->app->singleton(InventoryService::class, function ($app) {
            return new InventoryService(
                $app->make(InventoryRepository::class),
                $app->make(SubcategoryRepository::class),
                $app->make(UserRepository::class),
                $app->make(StatusRepository::class)
            );
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
