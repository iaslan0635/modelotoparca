<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Support\Facades\Notification;
use ReflectionClassConstant;
use ReflectionException;

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
     * @noinspection PhpRedundantCatchClauseInspection
     */
    public function handle(object $event): void
    {
        try {
            $ref = new ReflectionClassConstant($event, "NOTIFICATION");
            $notificationClass = $ref->getValue();
            Notification::send(User::all(), new $notificationClass($event));
        } catch (ReflectionException) {
            // Ignore if $event::NOTIFICATION does not exists
        }
    }
}
