<?php

namespace App\Listeners;

use App\Events\AddressCreatedEvent;

class AddressCreatedListener
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
    public function handle(AddressCreatedEvent $event): void
    {
        //
    }
}
