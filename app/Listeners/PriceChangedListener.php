<?php

namespace App\Listeners;

use App\Events\PriceChangedEvent;

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
        //
    }
}
