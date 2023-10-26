<?php

namespace App\Providers;

use App\Facades\N11Client\N11Client;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(N11Client::class, fn () => new N11Client(config("merchants.n11.apiKey"), config("merchants.n11.apiPassword")));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (config('app.force_https')) {
            URL::forceScheme('https');
        }
        Schema::defaultStringLength(255);
        Paginator::useBootstrapFour();
    }
}
