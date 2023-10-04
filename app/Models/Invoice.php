<?php

namespace App\Models;

use App\Events\InvoiceCreatedEvent;
use App\Events\InvoicePaidDateChangedEvent;
use App\Events\InvoiceRefundChangedEvent;
use App\Events\InvoiceStatusChangedEvent;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Invoice extends BaseModel
{
    protected $dispatchesEvents =[
        "created" => InvoiceCreatedEvent::class
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    protected static function booted(): void
    {
        static::updated(function (Invoice $invoice) {
            if ($invoice->wasChanged("paid_date"))
                dispatch(new InvoicePaidDateChangedEvent($invoice));
            if ($invoice->wasChanged("refund_date"))
                dispatch(new InvoiceRefundChangedEvent($invoice));
            if ($invoice->wasChanged("status"))
                dispatch(new InvoiceStatusChangedEvent($invoice));
        });
    }
}
