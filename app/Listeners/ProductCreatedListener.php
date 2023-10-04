<?php

namespace App\Listeners;

use App\Events\ProductCreatedEvent;

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
        //
    }
}
