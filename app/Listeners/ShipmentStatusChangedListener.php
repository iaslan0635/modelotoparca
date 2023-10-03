<?php

namespace App\Listeners;

use App\Events\ShipmentStatusChangedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
