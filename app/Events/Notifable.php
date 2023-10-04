<?php

namespace App\Events;

interface Notifable
{
    public function getNotification(): \Illuminate\Notifications\Notification;
    public function getNotificationAudience(): \Illuminate\Support\Collection|array;
}
