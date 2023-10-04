<?php

namespace App\Models;

use App\Events\AddressCreatedEvent;
use App\Events\InvoiceAddressChangedEvent;
use App\Events\ShipmentAddressChangedEvent;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends BaseModel
{
    use SoftDeletes;

    protected $dispatchesEvents =[
        "created" => AddressCreatedEvent::class
    ];

    protected function fullName(): Attribute
    {
        return Attribute::get(fn ($value) => $this->type === 'individual' ? "$this->first_name $this->last_name" : "$this->company_name");
    }

    protected static function booted(): void
    {
        static::updated(function (Address $address) {
            $orderFromInvoice = Order::where("invoice_address_id", $address->id)->first();
            $orderFromShipment = Order::where("shipment_address_id", $address->id)->first();

            if ($orderFromInvoice)
                dispatch(new InvoiceAddressChangedEvent($orderFromInvoice));
            if ($orderFromShipment)
                dispatch(new ShipmentAddressChangedEvent($orderFromShipment));
        });
    }
}
