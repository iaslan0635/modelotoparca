<?php

namespace App\Models;

use App\Events;
use App\Events\MerchantOrderCreatedEvent;
use App\Services\MarketPlace;
use Illuminate\Support\Arr;

class MerchantOrder extends BaseModel
{
    protected $casts = [
        'client' => 'array',
        'data' => 'array',
        'date' => 'datetime',
        'lines' => 'array',
        'line_data' => 'array',
    ];

    protected $dispatchesEvents = [
        'created' => MerchantOrderCreatedEvent::class,
    ];


    public function history()
    {
        return $this->hasMany(MerchantOrderHistory::class);
    }

    protected static function booted(): void
    {
        static::updated(function (MerchantOrder $order) {
            if (!$order->wasChanged("data")) return;

            $original = $order->getOriginal();

            $old = MarketPlace::parseOrder($original);
            $new = MarketPlace::parseOrder($order);

            $wasChanged = fn($key) => Arr::get($old, $key) !== Arr::get($new, $key);

            if ($wasChanged('items.*.cargo')) {
                dispatch(new Events\MerchantShipmentStatusChangedEvent($order));
            }
            if ($wasChanged('shipment_address_id')) {
                dispatch(new Events\MerchantShipmentAddressChangedEvent($order));
            }
            if ($wasChanged('invoiceAddress')) {
                dispatch(new Events\MerchantInvoiceAddressChangedEvent($order));
            }
            if ($wasChanged('status')) {
                dispatch(new Events\MerchantPaymentStatusChangedEvent($order));
            }
        });
    }
}
