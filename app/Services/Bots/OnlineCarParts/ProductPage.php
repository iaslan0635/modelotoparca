<?php

namespace App\Services\Bots\OnlineCarParts;

use App\Models\BotImage;
use App\Models\Ocp;
use App\Models\Product;
use App\Models\ProductCar;
use App\Models\ProductOem;
use Illuminate\Support\Facades\DB;

final class ProductPage
{
    /**
     * @param array<array{brand: string, oem: string}> $oems
     * @param int[] $vehicles
     */
    public function __construct(
        public readonly string $url,
        public readonly string $id,
        public readonly string $articleId,
        public readonly array  $oems,
        public readonly array  $specs,
        public readonly array  $vehicles,
        public readonly array  $tecdoc,
        public readonly string $title,
        public readonly string $subtitle,
        public readonly string $brand,
        public readonly array  $images,
        public readonly string $category,
        public readonly string $mpn,
        public readonly string $sku,
        public readonly string $gtin13,
        public readonly array $analogProducts = [],
    )
    {
    }

    public static function fromBigData(Ocp\Product $product): ProductPage
    {
        $oems = $product->oems->map(fn(Ocp\ProductOem $oem) => [
            'brand' => $oem->brand,
            'oem' => $oem->oem,
        ])->toArray();

        $vehicleIds = Ocp\ProductCar::where('product_id', $product->id)->pluck('car_id')->toArray();

        return new ProductPage(
            url: $product->url,
            id: $product->id,
            articleId: $product->article_no,
            oems: $oems,
            specs: $product->specifications,
            vehicles: $vehicleIds,
            tecdoc: $product->tecdoc,
            title: $product->title,
            subtitle: $product->subtitle,
            brand: $product->brand,
            images: $product->images,
            category: $product->category,
            mpn: $product->mpn,
            sku: $product->sku,
            gtin13: $product->gtin13,
        );
    }

    public function saveToBigData()
    {
        DB::connection('bigdata')->transaction(function () {
            Ocp\Product::updateOrInsert(
                ['id' => $this->id],
                [
                    'title' => $this->title,
                    'subtitle' => $this->subtitle,
                    'brand' => $this->brand,
                    'specifications' => json_encode($this->specs),
                    'tecdoc' => json_encode($this->tecdoc),
                    'images' => json_encode($this->images),
                    'category' => $this->category,
                    'mpn' => $this->mpn,
                    'sku' => $this->sku,
                    'gtin13' => $this->gtin13,
                    'url' => $this->url,
                    'article_no' => $this->articleId,
                ]
            );

            Ocp\ProductOem::insertOrIgnore(array_map(fn($oem) => array_merge($oem, ['product_id' => $this->id]), $this->oems));

            Ocp\ProductCar::insertOrIgnore(
                array_map(fn($vehicleId) => [
                    'product_id' => $this->id,
                    'car_id' => $vehicleId,
                ], $this->vehicles)
            );
        });
    }


//    public function saveToDatabase(int $product_id, bool $includeTectoc, bool $includeOems = true)
//    {
//        DB::transaction(function () use ($includeTectoc, $includeOems, $product_id) {
//
//            if ($includeOems) {
//                ProductOem::insertOrIgnore(
//                    array_map(fn($oem) => array_merge($oem, ['logicalref' => $product_id]), $this->oems)
//                );
//            }
//
//            $product = Product::findOrFail($product_id, ['id', 'tecdoc']);
//            $product->specifications = $this->specs;
//
//            if ($includeTectoc) {
//                $product->tecdoc = array_merge($product->tecdoc ?? [], $this->tecdoc);
//            }
//
//            $product->save();
//
//            ProductCar::insertOrIgnore(
//                array_map(fn($vehicleId) => [
//                    'logicalref' => $product_id,
//                    'car_id' => $vehicleId,
//                ], $this->vehicles)
//            );
//
//            BotImage::insertOrIgnore(
//                array_map(fn($image) => [
//                    'product_id' => $product_id,
//                    'url' => $image,
//                    'bot_page_url' => $this->url,
//                ], $this->images)
//            );
//        });
//    }



//    public function saveToDatabase(int $product_id, bool $includeTectoc)
//    {
//        DB::transaction(function () use ($includeTectoc, $product_id) {
//            ProductOem::insertOrIgnore(array_map(fn($oem) => array_merge($oem, ['logicalref' => $product_id]), $this->oems));
//
//            $product = Product::findOrFail($product_id, ['id', 'tecdoc']);
//            $product->specifications = $this->specs;
//            if ($includeTectoc) {
//                $product->tecdoc = array_merge($product->tecdoc ?? [], $this->tecdoc);
//            }
//            $product->save();
//
//            ProductCar::insertOrIgnore(
//                array_map(fn($vehicleId) => [
//                    'logicalref' => $product_id,
//                    'car_id' => $vehicleId,
//                ], $this->vehicles)
//            );
//
//            BotImage::insertOrIgnore(
//                array_map(fn($image) => [
//                    'product_id' => $product_id,
//                    'url' => $image,
//                    'bot_page_url' => $this->url,
//                ], $this->images)
//            );
//        });
//    }


    public function saveToDatabase(int $product_id, bool $includeTectoc, bool $includeOems = true)
    {
        DB::transaction(function () use ($includeTectoc, $includeOems, $product_id) {

            // OEM kodlarını sadece istenirse ekle
            if ($includeOems) {
                ProductOem::insertOrIgnore(
                    array_map(fn($oem) => array_merge($oem, ['logicalref' => $product_id]), $this->oems)
                );
            }

            $product = Product::findOrFail($product_id, ['id', 'tecdoc']);
            $product->specifications = $this->specs;

            // Tecdoc verisi sadece istenirse ekle
            if ($includeTectoc) {
                $product->tecdoc = array_merge($product->tecdoc ?? [], $this->tecdoc);
            }

            $product->save();

            ProductCar::insertOrIgnore(
                array_map(fn($vehicleId) => [
                    'logicalref' => $product_id,
                    'car_id' => $vehicleId,
                ], $this->vehicles)
            );

            BotImage::insertOrIgnore(
                array_map(fn($image) => [
                    'product_id' => $product_id,
                    'url' => $image,
                    'bot_page_url' => $this->url,
                ], $this->images)
            );
        });
    }

}
