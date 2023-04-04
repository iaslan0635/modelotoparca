<?php

namespace App\Models;

use Elastic\ScoutDriverPlus\Searchable;

class ProductCar extends BaseModel
{
    public $timestamps = false;
    use Searchable;
}
