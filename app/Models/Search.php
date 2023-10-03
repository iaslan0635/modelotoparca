<?php

namespace App\Models;

class Search extends BaseModel
{
    protected $fillable = [
        'query',
        'user_id',
    ];
}
