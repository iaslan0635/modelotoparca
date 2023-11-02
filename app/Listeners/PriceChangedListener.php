<?php

namespace App\Listeners;

use App\Events\PriceChangedEvent;
use App\Services\MarketPlace;

class PriceChangedListener
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
    public function handle(PriceChangedEvent $event): void
    {
        $price = $event->price;
        $product = $price->product;

        foreach (MarketPlace::merchants() as $merchant) {
            $merchant->updatePrice($product);
        }
    }
}
