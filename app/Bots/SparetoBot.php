<?php

namespace App\Bots;

use App\Facades\SparetoCache;
use App\Lib\Dom;
use App\Models\Car;
use App\Models\Maker;
use App\Models\Product;
use App\Models\ProductCar;
use App\Models\ProductOem;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class SparetoBot implements ShouldQueue, ShouldBeUnique
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public const bitmask = 1;

    public const originId = 2;

    public $keyword;

    public function __construct($keyword)
    {
        $this->keyword = $keyword;
    }

    /** @noinspection PhpUnused */
    public function uniqueId()
    {
        return $this->keyword;
    }

    public static function dispatchAllFields(Product $product)
    {
        $oems = explode(',', $product->oem_codes);
        $keywords = collect($oems)
            ->push($product->cross_code)
            ->push($product->producercode)
            ->map('trim')->filter('filled');

        foreach ($keywords as $keyword) {
            if (self::isDone($keyword)) continue;

            $job = new SparetoBot($keyword);
            dispatch($job->onQueue('spareto'));
        }
    }

    public function handle()
    {
        if (self::isDone($this->keyword))
            return; // double check

        $this->search($this->keyword);
    }

    private function search($keyword)
    {
        $url = 'https://spareto.com/products?keywords=' . urlencode($keyword);
        $html = $this->dom($url);
        if ($html->exists('div #products-js')) {
            $pageCount = intval($html->safeInnertext('.page-link', -2, 1));
            for ($i = 1; $i <= $pageCount; $i++) {
                $htmlUrun = $this->dom($url . '&page=' . $i);
                foreach ($htmlUrun->find('#products-js  .card-col') as $productDom)
                    $this->scrapeProduct($productDom);
            }
            $this->markDone($keyword);
        }
    }

    private function scrapeProduct($productDom)
    {
        $htmlUrunDetay = $this->dom('https://spareto.com' . $productDom->find('.card-product-main a', 0)->href); // ürün iç sayfa
        $partNumber = $productDom->find('.card-product-main .part_number', 0)->innertext; // ürün kodu

        $dimensions = [];
        /** @noinspection PhpUndefinedMethodInspection */
        if (isset($htmlUrunDetay->find('.order-3', 0)->parent()->parent()->exists('table', 1)->innertext)) {
            /** @noinspection PhpUndefinedMethodInspection */
            $dimensionsTable = $htmlUrunDetay->find('.order-3', 0)->parent()->parent()->find('table', 1);
            foreach ($dimensionsTable->find('tr') as $dimensionNode) {
                $key = $dimensionNode->safeInnertext('td', 0);
                if (blank($key)) continue;
                $dimensions[$key] = $dimensionNode->safeInnertext('td', 1) . ' ' . $dimensionNode->safeInnertext('td', 2);
            }
        }

        $specifications = [];
        /** @noinspection PhpUndefinedMethodInspection */
        if (isset($htmlUrunDetay->find('.order-3', 0)->parent()->parent()->find('table', 0)->innertext)) {
            /** @noinspection PhpUndefinedMethodInspection */
            $specificationsTable = $htmlUrunDetay->find('.order-3', 0)->parent()->parent()->find('table', 0);
            foreach ($specificationsTable->find('tr') as $specificationsNode) {
                $key = $specificationsNode->safeInnertext('td', 0);
                if (blank($key)) {
                    continue;
                }
                $specifications[$key] = $specificationsNode->find('td', 1)->innertext;
            }
        }

        $cars = collect();
        if ($htmlUrunDetay->exists('#cars table')) {
            $carsTable = $htmlUrunDetay->find('#cars table', 0);
            foreach ($carsTable->find('tbody tr') as $carRow) {
                $carModel = $carRow->hasChild('td', 1) ? $carRow->find('td', 1)->find('a', 0)->innertext : null;
                $carModelLink = $carRow->hasChild('td', 1) ? $carRow->find('td', 1)->find('a', 0)->href : null;
                $carProducedFrom = $carRow->hasChild('td', 2) ? $carRow->find('td', 2)->find('span', 0)->innertext : null;
                $carProducedTo = $carRow->hasChild('td', 2) ? $carRow->find('td', 2)->find('span', 1)->innertext : null;
                $carPower = $carRow->safeInnertext('td', 3, null);
                $carCcm = $carRow->safeInnertext('td', 5, null);
                $shortName = $carRow->attr['data-model-short-name'] ?? null;
                $carPermalink = str_replace('/t/vehicles/', '', $carModelLink);

                if ($carProducedFrom == '...')
                    $carProducedFrom = null;

                if ($carProducedTo == '...')
                    $carProducedTo = null;


                $cars->map(fn($c) => Car::find($c, 'permalink'));

                $modelId = Car::query()->where('permalink', $carPermalink)->value('id');
                if (is_null($modelId)) {
                    $values = [
                        'name' => $carModel,
                        'short_name' => $shortName,
                        'produced_from' => $carProducedFrom,
                        'produced_to' => $carProducedTo,
                        'permalink' => $carPermalink,
                        'capacity' => $carCcm,
                        'power' => $carPower,
                    ];

                    $carMakerName = strstr($carPermalink, '/', true);
                    if ($carMakerName !== false) {
                        $carMaker = Maker::query()->where('permalink', "vehicles/$carMakerName")->first(['id', 'name']);
                        if ($carMaker) {
                            $values['maker_id'] = $carMaker->id;
                            $values['maker_name'] = $carMaker->name;
                        }
                    }

                    Car::create($values);
                }

                $cars->push($modelId);
            }
        }

        $oems = collect();
        if ($htmlUrunDetay->exists('#oe .row')) {
            foreach ($htmlUrunDetay->find('#oe .row') as $brandRow) {
                $oeBrand = $brandRow->find('strong', 0)->innertext;
                $oeList = [];
                foreach ($brandRow->find('p', 1)->find('a') as $oe)
                    if ($brandRow->hasChild('p', 1))
                        $oeList[] = $oe->innertext;

                $oems->push([
                    'brand' => $oeBrand,
                    'list' => $oeList,
                ]);
            }
        }

        $partNumberRegexed = preg_replace('/[^a-zA-Z0-9]/', '', $partNumber);
        $sameCrossRefs = blank($partNumberRegexed) ? collect() : // prevent search for empty string
            Product::query()->where('cross_code_regexed', $partNumberRegexed)->pluck('id');

        if ($sameCrossRefs->isNotEmpty())
            Product::query()->whereIn('id', $sameCrossRefs)->update(compact('dimensions', 'specifications'));

        $isQueryFiltered = false;
        $targetRefsQuery = Product::query();
        foreach ($oems->pluck('list')->flatten() as $oem) {
            $unspacedOem = str_replace(' ', '', $oem);
            if (blank($unspacedOem)) continue; // prevent search for empty string
            $targetRefsQuery->orWhereRaw('FIND_IN_SET(?, oem_codes_unspaced)', [$unspacedOem]);
            $isQueryFiltered = true;
        }

        $targetRefs = $isQueryFiltered ? $targetRefsQuery->pluck('id') : collect();
        foreach ($targetRefs->merge($sameCrossRefs)->unique() as $targetRef) {
            $this->saveProduct(
                $targetRef,
                $cars,
                $oems
            );
        }
    }

    private function saveProduct(
        int        $targetRef,
        Collection $modelsIds,
        Collection $oems
    )
    {
        // add cars
        ProductCar::insertOrIgnore(
            $modelsIds->map(fn(int $id) => [
                'logicalref' => $targetRef,
                'car_id' => $id,
            ])->all()
        );

        // add oems for table
        foreach ($oems as ['brand' => $brand, 'list' => $oeList]) {
            $oemRecord = ProductOem::query()->firstOrCreate(['brand' => $brand, 'logicalref' => $targetRef]);
            $oemRecord->oeList = collect($oemRecord->oeList)->merge($oeList)->unique();
            $oemRecord->save();
        }
    }

    private static function isDone(string $keyword)
    {
        return DB::table('sparetobot_dones')->where('keyword', '=', $keyword)->exists();
    }

    private static function markDone(string $keyword)
    {
        DB::table('sparetobot_dones')->insertOrIgnore(['keyword' => $keyword]);
    }

    private static function get($url)
    {
        return SparetoCache::get($url);
    }

    private static function dom($url)
    {
        return new Dom(self::get($url));
    }
}
