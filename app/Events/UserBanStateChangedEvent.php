<?php

namespace App\Events;

use App\Models\User;
use App\Notifications\UserBanStateChangedNotification;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class UserBanStateChangedEvent implements Notifable
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
        return new UserBanStateChangedNotification($this);
    }

    public function getNotificationAudience(): Collection|array
    {
        return [$this->user];
    }
}
