<?php

namespace App\Models\Ocp;

use App\Packages\Fuzz;

class Brand extends BaseModel
{
    public $timestamps = false;

    public static function idFromName(string $name): ?int
    {
        $regexed = Fuzz::regexify($name);

        return self::where('regexed_name', $regexed)->first()?->id;
    }

    public static function idFromNameWithFetchFallback(string $name, string $keyword, bool $isOem)
    {
        if ($id = self::idFromName($name)) {
            return $id;
        }

        $url = SearchPage::makeUrl($keyword, $isOem, null);
        $brands = SearchPage::fetchBrands($url);
        $brand = collect($brands)->first(fn ($brand) => Fuzz::isEqual($brand->name, $name));

        return $brand?->id;
    }
}
