<?php

namespace App\Listeners;

use App\Events\ShipmentAddressChangedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
