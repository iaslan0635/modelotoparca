<?php

namespace App\Listeners;

use App\Events\ProductCategoryChangedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ProductCategoryChangedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProductCategoryChangedEvent $event): void
    {
        //
    }
}
