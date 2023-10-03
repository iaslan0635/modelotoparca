<?php

namespace App\Listeners;

use App\Events\UserBanStateChangedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
