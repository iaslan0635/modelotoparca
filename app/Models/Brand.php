<?php

namespace App\Models;

use App\Enum\BrandTypesEnum;
use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory, UploadTrait;

    protected $guarded = [];

    protected $casts = [
        'type' => BrandTypesEnum::class,
        'data' => 'array'
    ];
}
