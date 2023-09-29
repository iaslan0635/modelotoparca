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
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class Sperato
{
    public static function request(string $url)
    {
        $response = Http::withOptions([
            'proxy' => 'socks5://127.0.0.1:9050',
            'connect_timeout' => 60
        ])->withoutVerifying()->get($url);

        // Yanıtı işleme veya görüntüleme
        if ($response->successful()) {
            return $response->body();
        } else {
            return 'Proxy isteği başarısız ' . $response->status();
        }
    }

    public static function smash(string $keyword, int $product_id)
    {
        $request = self::request("https://spareto.com/products?keywords=$keyword&per_page=48");
        $html = <<<HTML
$request
HTML;
        $crawler = new Crawler($html);
        $links = [];

        $products = $crawler->filter('#products-js')->filter('.card-col');
        if ($products->count() <= 0) {
            Log::create([
                'product_id' => $product_id,
                'message' => 'Ürün bulunamadı, Anahtar Kelime: ' . $keyword,
            ]);

            return false;
        }

        Log::create([
            'product_id' => $product_id,
            'message' => $products->count() . " Adet ürün çekildi. Anahtar Kelime: ". $keyword
        ]);

        $products->each(function (Crawler $cardElement) use (&$links) {
            if ($cardElement->attr("class") === "card-col")
                $links[] = $cardElement->filter('a')->attr('href');
        });


        $added = false;
        foreach ($links as $link) {
            $connection = SparetoProduct::firstOrCreate(['product_id' => $product_id, 'url' => $link]);
            if ($connection->is_banned) continue;
            $product = self::getProduct($link);

            Product::query()->where("id", $product_id)->update([
                'dimensions' => $product['dimension'],
                'specifications' => $product['specification']
            ]);

            \Log::info(json_encode($product['oem']));

            foreach ($product['oem'] as $pair) {
                ProductOem::firstOrCreate([
                    'logicalref' => $product_id,
                    ...$pair
                ]);
            }

            foreach ($product['cross'] as $cross) {
                ProductSimilar::firstOrCreate([
                    'product_id' => $product_id,
                    'code' => $cross,
                ]);
            }


            foreach ($product['vehicles'] as $vehicle) {
                [$from, $to] = array_map(fn($v) => $v === "..." ? null : $v, explode(" - ", $vehicle['produced']));
                $car = Car::where('permalink', $vehicle['permalink'])->first("id");
                if (!$car) {
                    $makerSlug = explode("/", $vehicle['permalink'])[0];
                    $maker = Maker::where("permalink", "vehicles/$makerSlug")->first("id");
                    $makerId = $maker ? $maker->id : 0;
                    $car = Car::create([
                        'permalink' => $vehicle['permalink'],
                        'name' => $vehicle['model'],
                        'short_name' => $vehicle['short_name'],
                        'produced_from' => $from,
                        'produced_to' => $to,
                        'power' => $vehicle['power'],
                        'maker_id' => $makerId
                    ]);
                }

                ProductCar::firstOrCreate([
                    "logicalref" => $product_id,
                    "car_id" => $car->id
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

        $dimension = [];
        $specification = [];
        $oem = [];
        $cross = [];
        $vehicles = [];

        $dimensions = $crawler->filter('#content > div:nth-child(1) > div.row.mb-5 > div.order-3.order-md-3.col-md-12.col-lg-5.order-lg-2 > div.card.mb-3');
        $specifications = $crawler->filter('#product-properties');
        $table = $dimensions->filter('table');
        $trElements = $table->filter('tr');
        $trElements->each(function ($trElement) use (&$dimension) {
            $tdElements = $trElement->filter('td');

            $tdElements->each(function ($tdElement) use (&$trElement, &$dimension) {
                \Log::info($trElement->text());

                if ($tdElement->attr('itemprop') === 'name') {
                    $dimension[strtolower($tdElement->text())] = trim(str_replace($tdElement->text(), '', $trElement->text()));
                }
            });
        });

        $specTable = $specifications->filter('table');
        $specTrElements = $specTable->filter('tr');

        $specTrElements->each(function ($trElement) use (&$specification) {
            $tdElements = $trElement->filter('td');

            $tdElements->each(function ($tdElement, $i) use (&$trElement, &$specification) {
                if ($i === 0) {
                    $specification[$tdElement->text()] = trim(str_replace($tdElement->text(), '', $trElement->text()));
                }
            });
        });

        $h3Elements = $crawler->filter('#nav-oe > div > div');
        $stop = false;

        $h3Elements->each(function (Crawler $h3Element) use (&$oem, &$cross, &$stop) {
            $oemDivs = $h3Element->filter('h3')->first()->nextAll();
            $crossDivs = $h3Element->filter('h3')->last()->nextAll();
            $oemDivs->each(function (Crawler $divElement) use (&$oem, &$stop) {
                if ($divElement->nodeName() === 'h3') {
                    $stop = true;
                } elseif (!$stop) {
                    $brand = $divElement->filter(".col-md-2.col-4.pl-4")->text();
                    $divElements = $divElement->filter('.col-md-10.col-8');
                    $divElements->each(function (Crawler $divElement) use ($brand, &$oem, &$cross) {
                        $innerElements = $divElement->filter('span, a');

                        $innerElements->each(function (Crawler $innerElement) use ($brand, &$oem, &$cross) {
                            $oem[] = ["brand" => $brand, "oem" => $innerElement->text()];
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

        $crawler->filter('#nav-vehicles > table > tbody')->filter('tr')->each(function (Crawler $vehicle) use (&$vehicles) {
            $car = [
                'short_name' => $vehicle->attr('data-model-short-name'),
            ];
            $vehicle->filter('td')->each(function (Crawler $td, $i) use (&$car) {
                if ($i === 1) {
                    $car['permalink'] = str_replace('/t/vehicles/', '', $td->filter('a')->attr('href'));
                    $car['model'] = $td->text();
                }

                if ($i === 2) {
                    $car['produced'] = $td->text();
                }

                if ($i === 3) {
                    $car['power'] = $td->text();
                }

                if ($i === 4) {
                    $car['hp'] = $td->text();
                }

                if ($i === 5) {
                    $car['ccm'] = $td->text();
                }
            });
            $vehicles[] = $car;
        });

        return [
            'dimension' => $dimension,
            'specification' => $specification,
            'oem' => $oem,
            'cross' => $cross,
            'vehicles' => $vehicles,
        ];
    }
}
