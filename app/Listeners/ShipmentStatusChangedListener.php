<?php

namespace App\Listeners;

use App\Events\ShipmentStatusChangedEvent;

class ShipmentStatusChangedListener
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
    public function handle(ShipmentStatusChangedEvent $event): void
    {
        //
    }
}
