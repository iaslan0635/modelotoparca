<?php

namespace App\Listeners;

use App\Events\Notifable;
use Illuminate\Support\Facades\Notification;

class SendNotification
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
    public function handle(object $event): void
    {
        if ($event instanceof Notifable) {
            Notification::send($event->getNotificationAudience(), $event->getNotification());
        }
    }
}
