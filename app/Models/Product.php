<?php

namespace App\Models;

use Elastic\ScoutDriverPlus\Searchable;

class Product extends BaseModel
{
    use Searchable;
}
