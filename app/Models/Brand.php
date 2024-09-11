<?php

namespace App\Models;

use App\Enums\BrandType;
use App\Events\BrandChangedEvent;
use App\Traits\HasImages;
use Elastic\ScoutDriverPlus\Searchable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use stdClass;

class Brand extends BaseModel
{
    use HasImages {
        imageUrl as protected databaseImageUrl;
    }
    use Searchable;

    protected $guarded = [];

    protected $dispatchesEvents = [
        'updated' => BrandChangedEvent::class,
    ];

    protected $casts = [
        'type' => BrandType::class,
        'data' => 'array',
        'is_popular' => 'boolean',
    ];

    protected $searchableAs = 'brands_index';

    public function searchableAs()
    {
        return $this->searchableAs;
    }

    public function toSearchableArray()
    {
        return $this->only([
            'id',
            'name',
            'slug',
        ]);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    // We didn't use the HasImage trait because images are stored according to brand name
    public function imageUrl($default = null)
    {
        $defaultSentinel = new stdClass();
        $databaseImage = $this->databaseImageUrl($defaultSentinel);

        if ($databaseImage !== $defaultSentinel) {
            return $databaseImage;
        }

        $filename = "images/brands/$this->name.png";
        if (file_exists(public_path($filename))) {
            return asset($filename);
        }

        $botFilename = "images/brands/$this->botname.png";
        if (file_exists(public_path($botFilename))) {
            return asset($botFilename);
        }

        return $default === null ? $this->defaultImage() : value($default);
    }

    public function merchants(): HasMany
    {
        return $this->hasMany(MerchantBrandConnect::class);
    }
}
