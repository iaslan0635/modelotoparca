<?php

namespace App\Models\Ocp;

use App\Services\Bots\OcpClient;
use Illuminate\Database\Eloquent\Model;
use Spatie\Url\Url;
use Symfony\Component\DomCrawler\Crawler;

class SearchPage extends Model
{
    public $timestamps = false;

    protected $casts = [
        'brands' => 'array',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->using(SearchResultProduct::class);
    }

    public function urlWithBrands(array $brands): string
    {
        // Spatie URL does not support adding multiple values for the same query parameter
        $sep = str_contains($this->url, '?') ? '&' : '?';
        return $this->url . $sep . http_build_query(['brands' => $brands], '', '&', PHP_QUERY_RFC3986);
    }

    public function urlWithPage(int $page): string
    {
        return (string)Url::fromString($this->url)->withQueryParameter('page', $page);
    }
}
