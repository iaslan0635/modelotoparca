<?php

namespace App\Models;

use App\Events\InvoiceCreatedEvent;

class Invoice extends BaseModel
{
    protected $dispatchesEvents =[
        "created" => InvoiceCreatedEvent::class
    ];
}
