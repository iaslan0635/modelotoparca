<?php

namespace App\Models;

use App\Events\TaxChangedEvent;

class Tax extends BaseModel
{
    protected $dispatchesEvents =[
        "updated" => TaxChangedEvent::class
    ];
}
