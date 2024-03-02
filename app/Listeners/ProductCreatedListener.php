<?php

namespace App\Listeners;

use App\Events\ProductCreatedEvent;
use App\Services\MarketPlace;

class ProductCreatedListener
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
    public function handle(ProductCreatedEvent $event): void
    {
        if ($event->product->ecommerce) {
            foreach (MarketPlace::merchants() as $merchant) {
                MarketPlace::errorContext(fn () => $merchant->sendProduct($event->product));
            }
        }
    }
}
