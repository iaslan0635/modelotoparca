<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;

class Review extends BaseModel
{
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
