<?php

namespace App\Models;

use App\Events\OrderCreatedEvent;
use App\Events\PaymentStatusChangedEvent;
use App\Events\ShipmentAddressChangedEvent;
use App\Events\ShipmentStatusChangedEvent;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends BaseModel
{
    protected $dispatchesEvents =[
        "created" => OrderCreatedEvent::class
    ];

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function invoiceAddress(): HasOne
    {
        return $this->hasOne(Address::class, 'id', 'invoice_address_id');
    }

    public function shipmentAddress(): HasOne
    {
        return $this->hasOne(Address::class, 'id', 'shipment_address_id');
    }

    protected static function booted(): void
    {
        static::updated(function (Order $order) {
            if ($order->wasChanged("shipment_status"))
                dispatch(new ShipmentStatusChangedEvent($order));
            if ($order->wasChanged("shipment_address_id"))
                dispatch(new ShipmentAddressChangedEvent($order)); // RELATION_CONFLICT
            if ($order->wasChanged("payment_status"))
                dispatch(new PaymentStatusChangedEvent($order));
        });
    }
}
