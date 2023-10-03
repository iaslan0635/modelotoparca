<?php

namespace App\Listeners;

use App\Models\User;
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
        $notificationClass = $event::NOTIFICATION;
        Notification::send(User::all(), new $notificationClass($event));
    }
}
