<?php

namespace App\Listeners;

use App\Events\ProductCategoryChangedEvent;

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
        // FIXME: fix ProductCategoryChangedEvent
    }
}
