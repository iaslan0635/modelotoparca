<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(255);
        Paginator::useBootstrapFour();

        //if (app()->isProduction()) {
            $children10 = ['children' => fn ($q) => $q->limit(23)];
            $categories = Category::root()
                ->orderBy('order')
                ->with('image')
                ->limit(10)
                ->get()
                // limit each parent separately not overall
                ->map(fn ($m) => $m->load($children10));
            View::share('__Categories', $categories);
        //}
    }
}
