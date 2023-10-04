<?php

namespace App\Events;

use App\Models\Invoice;
use App\Notifications\InvoiceStatusChangedNotification;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class InvoiceStatusChangedEvent implements Notifable
{
    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(
        public Invoice $invoice
    )
    {
        //
    }

    public function getNotification(): Notification
    {
        return new InvoiceStatusChangedNotification($this);
    }

    public function getNotificationAudience(): Collection|array
    {
        return [$this->invoice->user];
    }
}
