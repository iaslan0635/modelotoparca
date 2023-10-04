<?php

namespace App\Listeners;

use App\Events\ShipmentAddressChangedEvent;

class ShipmentAddressChangedListener
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
    public function handle(ShipmentAddressChangedEvent $event): void
    {
        //
    }
}
