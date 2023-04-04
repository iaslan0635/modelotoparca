<?php

namespace App\Models;

use App\Enum\BrandTypesEnum;
use App\Traits\HasImages;
use Elastic\ScoutDriverPlus\Searchable;

class Brand extends BaseModel
{
    use Searchable, HasImages;

    protected $guarded = [];

    protected $casts = [
        'type' => BrandTypesEnum::class,
        'data' => 'array'
    ];
}
