<?php

namespace App\Listeners;

use App\Events\OrderCreatedEvent;

class OrderCreatedListener
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
    public function handle(OrderCreatedEvent $event): void
    {
        //
    }
}
