<?php

namespace App\Listeners;

use App\Events\ProductVariantChangedEvent;

class ProductVariantChangedListener
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
    public function handle(ProductVariantChangedEvent $event): void
    {
        //
    }
}
