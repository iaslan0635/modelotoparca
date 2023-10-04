<?php

namespace App\Events;

use Illuminate\Notifications\Notification;
use Illuminate\Support\Collection;

interface Notifable
{
    public function getNotification(): Notification;

    public function getNotificationAudience(): Collection|array;
}
