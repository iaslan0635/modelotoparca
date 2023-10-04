<?php

namespace App\Notifications;
use App\Models\SmsTemplate;
use Illuminate\Notifications\Notification as BaseNotification;
use TarfinLabs\Netgsm\Sms\NetgsmSmsMessage;


abstract class Notification extends BaseNotification
{
    abstract protected function getSmsTemplateData(): array;

    public function toNetgsm(object $notifiable)
    {
        $template = SmsTemplate::where("notification_type", static::class)->first();
        return new NetgsmSmsMessage($template->render($this->getSmsTemplateData()));
    }
}
