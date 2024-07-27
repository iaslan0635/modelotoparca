<?php

namespace App\Models\Ocp;

use App\Packages\Fuzz;
use App\Services\Bots\OcpClient;
use Symfony\Component\DomCrawler\Crawler;

class SearchPage extends BaseModel
{
    public $timestamps = false;

    protected $casts = [
        'brands' => 'array',
        'categories' => 'array',
        'fetched_pages' => 'array',
    ];

    public function products()
    {
        return $this->hasMany(SearchPageProduct::class);
    }

    public static function makeUrl(string $keyword, bool $isOem, ?int $brandId): string
    {
        if ($isOem) {
            $url = 'https://www.onlinecarparts.co.uk/oenumber/'.Fuzz::regexify($keyword).'.html';
        } else {
            $url = 'https://www.onlinecarparts.co.uk/spares-search.html?keyword='.urlencode($keyword);
            if ($brandId !== null) {
                $url .= '&brand[]='.$brandId;
            }
        }

        return $url;
    }

    public static function fetchBrands(string $url)
    {
        $crawler = new Crawler(OcpClient::request($url));

        return $crawler->filter('.brand-slider__item')->each(
            fn (Crawler $el) => Brand::firstOrCreate(
                ['id' => $el->filter('input')->attr('value')],
                ['name' => $el->filter('img')->attr('alt')],
            )
        );
    }
}
