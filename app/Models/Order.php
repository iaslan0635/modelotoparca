<?php

namespace App\Models;

use App\Events;
use App\Events\OrderCreatedEvent;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends BaseModel
{
    protected $casts = [
        'client_data' => 'array',
        'original_data' => 'array',
    ];

    protected $dispatchesEvents = [
        'created' => OrderCreatedEvent::class,
    ];

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function invoiceAddress(): HasOne
    {
        return $this->hasOne(Address::class, 'id', 'invoice_address_id');
    }

    public function shipmentAddress(): HasOne
    {
        return $this->hasOne(Address::class, 'id', 'shipment_address_id');
    }

    public function history()
    {
        return $this->hasMany(OrderHistory::class);
    }

    protected static function booted(): void
    {
        static::updated(function (Order $order) {
            if ($order->wasChanged('shipment_status')) {
                dispatch(new Events\ShipmentStatusChangedEvent($order));
            }
            if ($order->wasChanged('shipment_address_id')) {
                dispatch(new Events\ShipmentAddressChangedEvent($order));
            }
            if ($order->wasChanged('invoice_address_id')) {
                dispatch(new Events\InvoiceAddressChangedEvent($order));
            }
            if ($order->wasChanged('payment_status')) {
                dispatch(new Events\PaymentStatusChangedEvent($order));
            }
        });
    }
}
