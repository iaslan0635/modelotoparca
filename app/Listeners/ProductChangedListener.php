<?php

namespace App\Listeners;

use App\Events\ProductChangedEvent;

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
        //
    }
}
