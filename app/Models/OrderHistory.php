<?php

namespace App\Models;


class OrderHistory extends BaseModel
{
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
