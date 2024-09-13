<?php

namespace App\Providers;

use App\Facades\N11Client\N11Client;
use App\Packages\CartItemSynthesizer;
use Carbon\Carbon;
use Elastic\Client\ClientBuilder;
use Elastic\Elasticsearch\ClientInterface as ElasticClientInterface;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(N11Client::class, fn() => new N11Client(config('merchants.n11.apiKey'), config('merchants.n11.apiPassword')));
        $this->app->bind(ElasticClientInterface::class, fn() => app(ClientBuilder::class)->default());
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (config('app.force_https')) {
            URL::forceScheme('https');
        }
        setlocale(LC_TIME, $this->app->getLocale());
        Carbon::setLocale(config('app.locale'));
        Schema::defaultStringLength(255);
        Paginator::useBootstrapFour();

        Livewire::propertySynthesizer(CartItemSynthesizer::class);
    }
}
