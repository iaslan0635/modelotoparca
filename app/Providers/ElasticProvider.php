<?php

namespace App\Providers;

use Elastic\Migrations\Filesystem\MigrationStorage;
use Illuminate\Support\ServiceProvider;

class ElasticProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        resolve(MigrationStorage::class)->registerPaths([
            '/elastic/migrations/2023_04_06_122736_create_products_index',
        ]);
    }
}
