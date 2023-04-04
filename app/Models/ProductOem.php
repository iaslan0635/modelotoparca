<?php

namespace App\Models;

use Elastic\ScoutDriverPlus\Searchable;

class ProductOem extends BaseModel
{
    public $timestamps = false;
    use Searchable;
}
