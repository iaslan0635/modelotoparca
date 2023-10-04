<?php

namespace App\Listeners;

use App\Events\ProductPropertyChangedEvent;

class ProductPropertyChangedListener
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
    public function handle(ProductPropertyChangedEvent $event): void
    {
        //
    }
}
