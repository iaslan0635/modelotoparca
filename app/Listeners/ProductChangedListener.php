<?php

namespace App\Listeners;

use App\Events\ProductChangedEvent;
use App\Services\MarketPlace;

class ProductChangedListener
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
    public function handle(ProductChangedEvent $event): void
    {
        if ($event->product->ecommerce) {
            foreach (MarketPlace::merchants() as $merchant) {
                try {
                    $merchant->updateProduct($event->product);
                } catch (\Throwable $t) {
                    report($t);
                }
            }
        }
    }
}
