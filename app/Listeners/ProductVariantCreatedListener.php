<?php

namespace App\Listeners;

use App\Events\ProductChangedEvent;
use App\Events\ProductVariantCreatedEvent;

class ProductVariantCreatedListener
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
    public function handle(ProductVariantCreatedEvent $event): void
    {
        ProductChangedEvent::dispatch($event->variant->product);
    }
}
