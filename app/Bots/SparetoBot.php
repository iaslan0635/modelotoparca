<?php

namespace App\Bots;

use App\Facades\SparetoCache;
use App\Models\Car;
use App\Models\Product;
use App\Models\ProductOem;
use App\Models\SparetoConnection;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;
use Symfony\Component\DomCrawler\Crawler;

class SparetoBot implements ShouldQueue, ShouldBeUnique
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, Batchable;


    public function __construct(public string $keyword, public string $keywordField)
    {
    }


    /**
     * @return string
     * @noinspection PhpUnused
     */
    public function uniqueId()
    {
        return $this->keyword;
    }

    private static function safeNew(string|null $keyword, string $field)
    {
        if (blank($keyword) || strlen($keyword) <= 3) return null;

        return (new SparetoBot($keyword, $field))->onQueue('spareto');
    }

    /** @return self[] */
    public static function newForAllFields(Product $product)
    {
        $jobs = [];
        $jobs[] = self::safeNew($product->cross_code, "cross_code");
        $jobs[] = self::safeNew($product->producercode, "producercode");

        $oems = collect(explode(',', $product->oem_codes ?? ''))
            ->map(fn(string $s) => trim($s))
            ->filter();

        foreach ($oems as $oem)
            $jobs[] = self::safeNew($oem, "oem");

        return array_filter($jobs, fn($j) => !is_null($j));
    }

    public static function dispatchAllFields(Product $product)
    {
        foreach (self::newForAllFields($product) as $job)
            dispatch($job);
    }

    public function handle()
    {
        $url = 'https://spareto.com/products?keywords=' . urlencode($this->keyword);
        $crawler = SparetoCache::crawler($url);
        if (!$crawler->filter('div #products-js')->count())
            return;

        $pageCount = intval($crawler->filter('li.page-item:nth-last-child(2) > a.page-link')->text(1));
        for ($i = 1; $i <= $pageCount; $i++) {
            $pageCrawler = SparetoCache::crawler($url . '&page=' . $i);
            $pageCrawler->filter('#products-js  .card-col')->each($this->scrapeProduct(...));
        }
    }

    private function scrapeProduct(Crawler $productCrawler)
    {
        $partNumberEl = $productCrawler->filter('.card-product-main .part_number');
        if (!$partNumberEl->count()) return;

        $partNumber = $partNumberEl->text();

        $url = $productCrawler->filter('.card-product-main a')->link()->getUri();
        $crawler = SparetoCache::crawler($url);

        //region Specifications and dimensions
        $dimensionsTable = $crawler->filterXPath("//div[contains(., 'Dimensions and size') and @class='card-header']/../table");
        $dimensionsTable = self::coalesceTbody($dimensionsTable);
        $dimensions = !$dimensionsTable->count() ? collect() :
            collect(
                $dimensionsTable->children()->each(function (Crawler $tr) {
                    $name = $tr->filter('[itemprop="name"]');
                    $rest = $name->nextAll()->each(fn(Crawler $td) => $td->text());

                    return [$name->text() => join(" ", $rest)];
                })
            )->mapWithKeys(fn($x) => $x);

        $specificationsTable = $crawler->filterXPath("//div[contains(., 'Specifications') and @class='card-header']/../table");
        $specificationsTable = self::coalesceTbody($specificationsTable);
        $specifications = !$specificationsTable->count() ? collect() :
            collect(
                $specificationsTable->children()->each(function (Crawler $tr) {
                    $children = $tr->children();
                    return [$children->eq(0)->text() => $children->eq(1)->text()];
                })
            )->mapWithKeys(fn($x) => $x);
        //endregion

        $sameCrosses = $this->findSameCrosses($partNumber);
        if ($sameCrosses->isNotEmpty())
            Product::query()->whereIn('id', $sameCrosses)->update(compact('dimensions', 'specifications'));

        $connect = function ($targetRef, $connectedBy) use ($url) {
            SparetoConnection::create([
                "product_id" => $targetRef,
                "url" => $url,
                "keyword" => $this->keyword,
                "keyword_field" => $this->keywordField,
                "connected_by" => $connectedBy,
            ]);
        };

        foreach ($sameCrosses as $targetRef)
            $connect($targetRef, "cross_code");

        $oems = self::extractOems($crawler);
        $sameOems = $this->findSameOems($oems);
        foreach ($sameOems as $targetRef)
            $connect($targetRef, "oem");

        $sameProducerCodes = self::findSameProducerCodes($partNumber);
        foreach ($sameProducerCodes as $targetRef)
            $connect($targetRef, "producercode");

        $sameProducerCodes2 = self::findSameProducerCodes2($partNumber);
        foreach ($sameProducerCodes2 as $targetRef)
            $connect($targetRef, "producercode2");
    }

    private static function coalesceTbody(Crawler $crawler): Crawler
    {
        $tbody = $crawler->filter("tbody");
        return $tbody->count() ? $tbody : $crawler;
    }

    private function findSameCrosses(string $crossCode)
    {
        $partNumberRegexed = preg_replace('/[^a-zA-Z0-9]/', '', $crossCode);
        return blank($partNumberRegexed) ? collect() : // prevent search for empty string
            Product::query()->where('cross_code_regexed', $partNumberRegexed)->pluck('id');
    }

    private function findSameProducerCodes(string $crossCode)
    {
        $partNumberRegexed = preg_replace('/[^a-zA-Z0-9]/', '', $crossCode);
        return blank($partNumberRegexed) ? collect() : // prevent search for empty string
            Product::query()->where('producercode_regexed', $partNumberRegexed)->pluck('id');
    }

    private function findSameProducerCodes2(string $crossCode)
    {
        $partNumberRegexed = preg_replace('/[^a-zA-Z0-9]/', '', $crossCode);
        return blank($partNumberRegexed) ? collect() : // prevent search for empty string
            Product::query()->where('producercode2_regexed', $partNumberRegexed)->pluck('id');
    }

    private function findSameOems(Collection $oems)
    {
        $valid_oems = $oems->pluck('oems')->flatten()
            ->map(fn(string $oem) => str_replace(' ', '', $oem))
            ->filter(fn(string $oem) => filled($oem));

        if ($valid_oems->isEmpty()) return collect();

        return ProductOem::query()->whereNull("connection_id")
            ->where(function (Builder $q) use ($valid_oems) {
                foreach ($valid_oems as $oem)
                    $q->orWhere('oem_unspaced', '=', $oem);
            })->distinct()->pluck('logicalref');
    }

    public static function extractOems(Crawler $crawler): Collection
    {
        $oemRows = $crawler
            ->filterXPath("//h3[text()='OE Numbers']/following-sibling::node()[following-sibling::h3[text()='Cross-Reference Numbers']]")
            ->filter(".row");

        return collect($oemRows->each(function (Crawler $row) {
            $children = $row->children();
            $brand = $children->eq(0)->text();
            $oems = $children->eq(1)->children()->each(fn(Crawler $col) => $col->text());
            return compact("brand", "oems");
        }));
    }

    public static function extractCars(Crawler $crawler): Collection
    {
        $carsTable = $crawler->filter("#nav-vehicles > table > tbody");
        return !$carsTable->count() ? collect() :
            collect($carsTable->children()->each(function (Crawler $tr) {
                $permalink = str_replace("/t/vehicles/", "", $tr->filter("a")->attr("href"));
                $carId = Car::where("permalink", $permalink)->value("id");
                if (!$carId) return false; //TODO: Adding nonexistent models not implemented

                return $carId;
            }))->filter();
    }
}
