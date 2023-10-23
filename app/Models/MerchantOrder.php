<?php

namespace App\Models;

use App\Events\MerchantOrderCreatedEvent;
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
}
