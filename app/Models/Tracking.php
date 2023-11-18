<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;

class Tracking extends BaseModel
{
    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
