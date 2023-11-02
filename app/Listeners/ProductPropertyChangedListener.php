<?php

namespace App\Listeners;

use App\Events\ProductChangedEvent;
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
        ProductChangedEvent::dispatch($event->propertyValue->product);
    }
}
