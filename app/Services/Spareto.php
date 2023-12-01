<?php

namespace App\Services;

use App\Models\Car;
use App\Models\Log;
use App\Models\Maker;
use App\Models\Product;
use App\Models\ProductCar;
use App\Models\ProductOem;
use App\Models\ProductSimilar;
use App\Models\SparetoProduct;
use App\Packages\Utils;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class Spareto
{
    public static function request(string $url)
    {
        $response = Http::withOptions([
            'proxy' => 'socks5://127.0.0.1:9050',
            'connect_timeout' => 60,
        ])->withoutVerifying()->get($url);

        // Yanıtı işleme veya görüntüleme
        if ($response->successful()) {
            return $response->body();
        } else {
            return 'Proxy isteği başarısız ' . $response->status();
        }
    }

    public static function smash(string $keyword, int $product_id, ?string $brand_filter = null, string $field = null)
    {
        if (strlen($keyword = trim($keyword)) == 0) return false;

        $url = "https://spareto.com/products?keywords=$keyword&per_page=48";
        if ($brand_filter) $url .= "&brand=$brand_filter";

        $request = self::request($url);
        $html = <<<HTML
$request
HTML;
        $crawler = new Crawler($html);

        $productCards = $crawler->filter('#products-js .card-col');

        $logSuffix = $brand_filter ? "Marka filtresi: $brand_filter" : '';
        if ($productCards->count() <= 0) {
            Log::create([
                'product_id' => $product_id,
                'message' => "Ürün bulunamadı, Anahtar Kelime: $keyword | $logSuffix",
            ]);

            return false;
        }

        Log::create([
            'product_id' => $product_id,
            'message' => "{$productCards->count()} Adet ürün çekildi. Anahtar Kelime: $keyword | $logSuffix",
        ]);


        $added = false;
        $links = $productCards->each(fn(Crawler $cardElement) => $cardElement->filter('a')->attr('href'));
        foreach ($links as $link) {
            $product = self::getProduct($link);

            /*
            $ourProduct = Product::find($product_id);
            $oemArray = collect($product["oem"])->map->oem;
            $hasCommonOemCodes = collect(explode(",", $ourProduct->oem_codes))
                ->filter()->map(fn(string $oem) => trim($oem))
                ->some(fn(string $oem) => $oemArray->search($oem));
            $textualFieldsMatches = collect([$ourProduct->producercode, $ourProduct->producercode2, $ourProduct->abk])
                ->filter()->some(fn(string $str) => str_contains($product["name"], $str));
            if (!$hasCommonOemCodes && !$textualFieldsMatches) continue;
            */


            $connection = SparetoProduct::updateOrCreate(['product_id' => $product_id, 'url' => $link], ['origin_field' => $field]);
            if ($connection->is_banned) continue;

            Product::query()->where('id', $product_id)->update([
                'dimensions' => $product['dimension'],
                'specifications' => $product['specification'],
            ]);

            foreach ($product['oem'] as $pair) {
                ProductOem::firstOrCreate([
                    'logicalref' => $product_id,
                    ...$pair,
                ]);
            }

            foreach ($product['cross'] as $cross) {
                ProductSimilar::firstOrCreate([
                    'product_id' => $product_id,
                    'code' => $cross,
                ]);
            }

            foreach ($product['vehicles'] as $vehicle) {
                [$from, $to] = array_map(fn($v) => $v === '...' ? null : $v, explode(' - ', $vehicle['produced']));
                $car = Car::where('permalink', $vehicle['permalink'])->first('id');
                if (!$car) {
                    $makerSlug = explode('/', $vehicle['permalink'])[0];
                    $maker = Maker::where('permalink', "vehicles/$makerSlug")->first('id');
                    $makerId = $maker ? $maker->id : 0;
                    $car = Car::create([
                        'permalink' => $vehicle['permalink'],
                        'name' => $vehicle['model'],
                        'short_name' => $vehicle['short_name'],
                        'produced_from' => $from,
                        'produced_to' => $to,
                        'power' => $vehicle['power'],
                        'maker_id' => $makerId,
                    ]);
                }

                ProductCar::firstOrCreate([
                    'logicalref' => $product_id,
                    'car_id' => $car->id,
                ]);

                $added = true;
            }
        }

        return $added;
    }

    public static function getProduct(string $url): array
    {
        $request = self::request("https://spareto.com$url");
        $html = <<<HTML
$request
HTML;
        $crawler = new Crawler($html);

        $oem = [];
        $cross = [];

        $propertyTableMapper = function (Crawler $tr) {
            $name = $tr->filter('td[itemprop=name]')->text(false) ?: $tr->filter("td")->eq(0)->text();
            $value = $tr->filter('td[itemprop=value]')->text(false) ?: $tr->filter("td")->eq(1)->text();

            return [$name, $value];
        };

        $dimensionRows = $crawler->filter('#content > div:nth-child(1) > div.row.mb-5 > div.order-3.order-md-3.col-md-12.col-lg-5.order-lg-2 > div.card.mb-3 table tr');
        $dimension = Utils::arrayPair($dimensionRows->each($propertyTableMapper));

        $specificationRows = $crawler->filter('table#product-properties tr');
        $specification = Utils::arrayPair($specificationRows->each($propertyTableMapper));

        $h3Elements = $crawler->filter('#nav-oe > div > div');
        $stop = false;

        $h3Elements->each(function (Crawler $h3Element) use (&$oem, &$cross, &$stop) {
            $oemDivs = $h3Element->filter('h3')->first()->nextAll();
            $crossDivs = $h3Element->filter('h3')->last()->nextAll();
            $oemDivs->each(function (Crawler $divElement) use (&$oem, &$stop) {
                if ($divElement->nodeName() === 'h3') {
                    $stop = true;
                } elseif (!$stop) {
                    $brand = $divElement->filter('.col-md-2.col-4.pl-4')->text();
                    $divElements = $divElement->filter('.col-md-10.col-8');
                    $divElements->each(function (Crawler $divElement) use ($brand, &$oem, &$cross) {
                        $innerElements = $divElement->filter('span, a');

                        $innerElements->each(function (Crawler $innerElement) use ($brand, &$oem, &$cross) {
                            $oem[] = ['brand' => $brand, 'oem' => $innerElement->text()];
                        });
                    });
                }
            });
            $crossDivs->each(function (Crawler $divElement) use (&$cross) {
                $divElements = $divElement->filter('.col-md-10.col-8');
                $divElements->each(function (Crawler $divElement) use (&$cross) {
                    $innerElements = $divElement->filter('span, a');

                    $innerElements->each(function (Crawler $innerElement) use (&$cross) {
                        $cross[] = $innerElement->text();
                    });
                });
            });
        });

        $vehicles = $crawler->filter('#nav-vehicles table tbody tr[data-model-short-name]')->each(fn(Crawler $vehicle) => [
            'short_name' => $vehicle->attr('data-model-short-name'),
            'permalink' => str_replace('/t/vehicles/', '', $vehicle->filter('td')->eq(1)->filter('a')->attr('href')),
            'model' => $vehicle->filter('td')->eq(1)->text(),
            'produced' => $vehicle->filter('td')->eq(2)->text(),
            'power' => $vehicle->filter('td')->eq(3)->text(),
            'hp' => $vehicle->filter('td')->eq(4)->text(),
            'ccm' => $vehicle->filter('td')->eq(5)->text(),
        ]);

        $name = $crawler->filter('span[itemprop="name"]')->innerText();

        return [
            'dimension' => $dimension,
            'specification' => $specification,
            'oem' => $oem,
            'cross' => $cross,
            'vehicles' => $vehicles,
            'name' => $name,
        ];
    }
}
