<?php

namespace App\Listeners;

use App\Events\UserActiveStateChangedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
