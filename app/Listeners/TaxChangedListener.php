<?php

namespace App\Listeners;

use App\Events\TaxChangedEvent;

class TaxChangedListener
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
    public function handle(TaxChangedEvent $event): void
    {
        //
    }
}
