<?php

namespace App\Jobs\Import;

use App\Facades\TaxFacade;
use App\Models\BotProduct;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Log;
use App\Models\Price;
use App\Models\Product;
use App\Models\ProductOem;
use App\Models\ProductSimilar;
use App\Models\TigerProduct;
use App\Services\Bots\OnlineCarParts;
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
        160 => 'try',
        1 => 'usd',
        20 => 'eur',
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
            $product->fill([
                'active' => $this->data['active'] ?? 1,
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
                'producercode' => $this->data['producercode'],
                'cross_code' => $this->data['cross_code'],
                'oem_codes' => $this->data['oem_codes'],
                'producercode2' => $this->data['producercode2'],
                'abk' => $this->data['abk'],
            ]);
            $veriler = [
                'abk',
                'producercode',
                'producercode2',
                'cross_code',
                'oem_codes',
                'markref',
            ];

            $isChaged = $product->isDirty($veriler);
            foreach ($product->getChanges() as $column => $new)
                if ($column !== 'updated_at' && $column !== 'created_at')
                    Log::create([
                        'product_id' => $product->id,
                        'message' => "Değişiklik yapıldı. Kolon: $column\nEski: {$product->getOriginal($column)}, Yeni: $new",
                    ]);

            $product->save();
        } else {
            $product = TigerProduct::create([
                'id' => $this->data['id'],
                'active' => $this->data['active'] ?? 1,
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

            if ($product->cross_code) {
                $product->similars()->firstOrCreate([
                    'code' => $product->cross_code,
                ]);
            }

            $oems = explode(',', $product->oem_codes);

            foreach ($oems as $oem) {
                $product->oems()->updateOrCreate(
                    ['oem' => $oem],
                    ['type' => "excel"]
                );
            }

            $isChaged = true;
        }

        $id = $product->id;
        $title = $product->web_name ?? $product->name ?? "BAŞLIKSIZ ÜRÜN";
        $allWebNames = implode(' ', [$product->name, $product->name3, $product->name4]);

        $image_appendix = 0;
        if ($product->image1) {
            $image_appendix |= self::IMAGE_11;
        } // IMAGEINC
        if ($product->image2) {
            $image_appendix |= self::IMAGE_12;
        } // IMAGE2INC

        $realProduct = Product::updateOrCreate(['id' => $id], [
            'brand_id' => $product->markref,
            'title' => $title,
            'sub_title' => $allWebNames,
            'description' => $allWebNames,
            'slug' => Str::slug($title) . '-' . $id,
            'sku' => $product->code,
            'quantity' => $product->onhand,
            'status' => intval($product->active) === 0,
            'type' => 'simple',
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
            "hidden_searchable" => $product->name2,
        ]);

        if ($isChaged) {
            self::runBot($product);
        }

        $mainCategory = Category::find($product->dominantref, ['name']);
        if ($mainCategory) {
            $categories = Category::where('name', $mainCategory->name)->pluck('id');
            $realProduct->categories()->sync($categories);
        }

        // INCVAT: 0 => KDV hariç, 1 => KDV dahil

        $price = $product->incvat == 1 ? TaxFacade::reverseCalculate($product->price, 20) : $product->price;

        Price::updateOrCreate(['product_id' => $id], [
            'price' => $price,
            'currency' => Arr::get(self::CURRENCY_MAP, intval($product->currency), 'try'),
        ]);

        $realProduct->searchable();
    }

    public static function runBot(TigerProduct $product): void
    {
        self::clearBotAssociations($product);

        $search_predence = [
            'abk',
            'producercode',
            'producercode2',
            'cross_code',
            'oem_codes',
        ];

        foreach ($search_predence as $field) {
            if ($field === 'oem_codes') {
                $oems = explode(',', $product[$field]);
                foreach ($oems as $oem) {
                    $trimmed = trim($oem);
                    if (strlen($trimmed) === 0) continue;
                    (new OnlineCarParts(
                        keyword: $trimmed,
                        product_id: $product->id,
                        field: $field,
                    ))->smash();
                }
                continue;
            }

            if ($product[$field] === null) continue;
            $value = trim($product[$field]);
            if (strlen($value) === 0) continue;

            $brand_filter = $field === 'producercode' || $field === 'producercode2' ? self::getBrand($product) : null;

            if ($field === "abk" && str_contains($value, "@")) {
                [$brand_filter, $value] = explode("@", $value);
            }

            $found = (new OnlineCarParts(
                keyword: $value,
                product_id: $product->id,
                field: $field,
                brand_filter: $brand_filter,
            ))->smash();
            if ($found) break;
        }

        $product->actualProduct?->searchable();
    }

    public static function clearBotAssociations(TigerProduct $product)
    {
        ProductSimilar::query()->where('product_id', $product->id)->delete();

        ProductOem::query()->where('type', '=', 'automatic')
            ->where('logicalref', $product->id)
            ->delete();

        $product->cars()->sync([]);
        BotProduct::where('product_id', $product->id)->where('is_banned', false)->delete();

        if ($product->cross_code) {
            $product->similars()->firstOrCreate([
                'code' => $product->cross_code,
            ]);
        }

        $oems = explode(',', $product->oem_codes ?? "");
        foreach ($oems as $oem) {
            $product->oems()->firstOrCreate([
                'oem' => $oem,
            ]);
        }

        $product->actualProduct->update([
            "tecdoc" => null,
            "specifications" => null,
        ]);
    }

    private static function getBrand(TigerProduct $product): ?string
    {
        $brand = Brand::find($product->markref, ["name", "botname"]);
        if (!$brand) return null;
        return $brand->botname ?? $brand->name;
    }
}
