<?php

namespace App\Events;

use App\Models\User;
use App\Notifications\UserRegisteredNotification;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class UserRegisteredEvent implements Notifable
{
    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(
        public User $user
    ) {
        //
    }

    public function getNotification(): Notification
    {
        return new UserRegisteredNotification($this);
    }

    public function getNotificationAudience(): Collection|array
    {
        return [];
    }
}
