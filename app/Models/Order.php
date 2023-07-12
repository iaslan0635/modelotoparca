<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends BaseModel
{
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
}
