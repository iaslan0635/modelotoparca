<?php

namespace App\Providers;

use App\Services\MerchantService;
use Illuminate\Support\ServiceProvider;

class MerchantServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(MerchantService::class);
    }

    public function boot(): void
    {
    }
}
