<?php

namespace App\Jobs\Import;

use App\Models\Price;
use App\Models\Product;
use App\Models\ProductOem;
use App\Models\ProductSimilar;
use App\Models\TigerProduct;
use App\Services\Sperato;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ExcelImport implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;

    const CURRENCY_MAP = [
        160 => "try",
        1 => "usd",
        20 => "eur",
    ];

    const IMAGE_11 = 0b10;
    const IMAGE_12 = 0b01;


    /**
     * Create a new job instance.
     */
    public function __construct($jobData)
    {
        $this->data = $jobData;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $product = TigerProduct::find($this->data['id']);
        if ($product) {
            $product->update([
                'active' => $this->data['active'],
                'card_type' => $this->data['card_type'],
                'code' => $this->data['code'],
                'name' => $this->data['name'],
                'name2' => $this->data['name2'],
                'name3' => $this->data['name3'],
                'name4' => $this->data['name4'],
                'stgrpcode' => $this->data['stgrpcode'],
                'specode' => $this->data['specode'],
                'specode2' => $this->data['specode2'],
                'salesbrws' => $this->data['salesbrws'],
                'dominantref' => $this->data['dominantref'],
                'image1' => $this->data['image1'],
                'image2' => $this->data['image2'],
                'unitsetref' => $this->data['unitsetref'],
                'markref' => $this->data['markref'],
                'sellprvat' => $this->data['sellprvat'],
                'web_name' => $this->data['web_name'],
                'similar_product_codes' => $this->data['similar_product_codes'],
                'minimum_sales_amount' => $this->data['minimum_sales_amount'],
                'market_place' => $this->data['market_place'],
                'kbt' => $this->data['kbt'],
                'ptype' => $this->data['ptype'],
                'definition' => $this->data['definition'],
                'begin_date' => $this->data['begin_date'],
                'end_date' => $this->data['end_date'],
                'price' => $this->data['price'],
                'currency' => $this->data['currency'],
                'incvat' => $this->data['incvat'],
                'sales_discount_rate' => $this->data['sales_discount_rate'],
                'fitting_position' => $this->data['fitting_position'],
                'onhand' => $this->data['onhand'],
                'condition' => $this->data['condition'],
            ]);
            $veriler = [
                'abk',
                'producercode',
                'producercode2',
                'cross_code',
                'oem_codes',
            ];

            $degisiklikYapildi = false;

            foreach ($veriler as $alan) {
                if (!$degisiklikYapildi && $this->data[$alan] !== $product->$alan) {
                    ProductSimilar::query()->where('product_id', $product->id)->delete();

                    ProductOem::query()->where('type', '=', 'automatic')
                        ->where('logicalref', $product->id)
                        ->delete();

//                    TODO: delete pivot cars
//                    $product->vehicles()->delete();
                    $product->update([
                        'producercode' => $this->data['producercode'],
                        'cross_code' => $this->data['cross_code'],
                        'oem_codes' => $this->data['oem_codes'],
                        'producercode2' => $this->data['producercode2'],
                        'abk' => $this->data['abk'],
                    ]);

                    if ($this->data['cross_code']) {
                        $product->similars()->firstOrCreate([
                            'code' => $this->data['cross_code'],
                        ]);
                    }

                    $oems = explode(',', $this->data['oem_codes']);

                    foreach ($oems as $oem) {
                        $product->oems()->firstOrCreate([
                            'oem' => $oem,
                        ]);
                    }

                    if ($alan === "oem_codes") {
                        $oems = explode(",", $this->data[$alan]);
                        foreach ($oems as $oem) {
                            Sperato::smash($oem, $product->id);
                        }
                    } else {
                        Sperato::smash($this->data[$alan], $product->id);
                    }
                    $degisiklikYapildi = true;
                }
            }
        } else {
            $product = TigerProduct::create([
                'id' => $this->data['id'],
                'active' => $this->data['active'],
                'card_type' => $this->data['card_type'],
                'code' => $this->data['code'],
                'name' => $this->data['name'],
                'name2' => $this->data['name2'],
                'name3' => $this->data['name3'],
                'name4' => $this->data['name4'],
                'stgrpcode' => $this->data['stgrpcode'],
                'producercode' => $this->data['producercode'],
                'specode' => $this->data['specode'],
                'specode2' => $this->data['specode2'],
                'salesbrws' => $this->data['salesbrws'],
                'dominantref' => $this->data['dominantref'],
                'image1' => $this->data['image1'],
                'image2' => $this->data['image2'],
                'unitsetref' => $this->data['unitsetref'],
                'markref' => $this->data['markref'],
                'sellprvat' => $this->data['sellprvat'],
                'cross_code' => $this->data['cross_code'],
                'oem_codes' => $this->data['oem_codes'],
                'producercode2' => $this->data['producercode2'],
                'web_name' => $this->data['web_name'],
                'similar_product_codes' => $this->data['similar_product_codes'],
                'minimum_sales_amount' => $this->data['minimum_sales_amount'],
                'market_place' => $this->data['market_place'],
                'kbt' => $this->data['kbt'],
                'ptype' => $this->data['ptype'],
                'definition' => $this->data['definition'],
                'begin_date' => $this->data['begin_date'],
                'end_date' => $this->data['end_date'],
                'price' => $this->data['price'],
                'currency' => $this->data['currency'],
                'incvat' => $this->data['incvat'],
                'sales_discount_rate' => $this->data['sales_discount_rate'],
                'fitting_position' => $this->data['fitting_position'],
                'onhand' => $this->data['onhand'],
                'condition' => $this->data['condition'],
                'abk' => $this->data['abk'],
            ]);

            $product->similars()->firstOrCreate([
                'code' => $product->cross_code,
            ]);

            $oems = explode(',', $product->oem_codes);

            foreach ($oems as $oem) {
                $product->oems()->firstOrCreate([
                    'oem' => $oem,
                ]);
            }

            $search_predence = [
                'abk',
                'producercode',
                'producercode2',
                'cross_code',
                'oem_codes',
            ];

            foreach ($search_predence as $field) {
                if (strlen($this->data[$field]) > 0) {
                    $found = Sperato::smash($this->data[$field], $product->id);
                    if ($found) break;
                }
            }
        }

        $id = $product->id;
        $title = $product->web_name ?? $product->name;
        $allWebNames = implode(" ", [$product->name, $product->name2, $product->name3, $product->name4]);

        $image_appendix = 0;
        if ($product->image1) $image_appendix |= self::IMAGE_11; // IMAGEINC
        if ($product->image2) $image_appendix |= self::IMAGE_12; // IMAGE2INC

        $realProduct = Product::updateOrCreate(['id' => $id], [
            'brand_id' => $product->markref,
            'title' => $title,
            'sub_title' => $allWebNames,
            'description' => $allWebNames,
            'slug' => Str::slug($title) . "-" . $id,
            'sku' => $product->code,
            'quantity' => $product->onhand,
            'status' => intval($product->active) === 0,
            'type' => "simple",
            'ecommerce' => intval($product->market_place) === 1,
            'part_number' => $product->cross_code,
            'producercode' => $product->producercode,
            'producercode2' => $product->producercode2,
            'cross_code' => $product->cross_code,
            'oem_codes' => $product->oem_codes,
            'similar_product_codes' => $product->similar_product_codes,
            'fitting_position' => $product->fitting_position,
            'image_appendix' => $image_appendix,
            'abk' => $product->abk,
        ]);

        $realProduct->categories()->attach($product->dominantref);
        Price::updateOrCreate(['product_id' => $id], [
            'price' => $product->price,
            'currency' => Arr::get(self::CURRENCY_MAP, intval($product->currency), "try"),
        ]);
    }
}
