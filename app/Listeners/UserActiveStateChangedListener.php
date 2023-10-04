<?php

namespace App\Listeners;

use App\Events\UserActiveStateChangedEvent;

class UserActiveStateChangedListener
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
    public function handle(UserActiveStateChangedEvent $event): void
    {
        //
    }
}
