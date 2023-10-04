<?php

namespace App\Listeners;

use App\Events\UserBanStateChangedEvent;

class UserBanStateChangedListener
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
    public function handle(UserBanStateChangedEvent $event): void
    {
        //
    }
}
