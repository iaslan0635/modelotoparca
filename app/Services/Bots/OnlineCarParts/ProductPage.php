<?php

namespace App\Services\Bots\OnlineCarParts;

use App\Models\BotImage;
use App\Models\Product;
use App\Models\ProductCar;
use App\Models\ProductOem;
use App\Models\Ocp;
use Illuminate\Support\Facades\DB;

final class ProductPage
{
    /**
     * @param string $url
     * @param string $id
     * @param string $articleId
     * @param array<array{brand: string, oem: string}> $oems
     * @param array $specs
     * @param int[] $vehicles
     * @param array $tecdoc
     * @param string $title
     * @param string $subtitle
     * @param string $brand
     * @param array $images
     * @param string $category
     * @param string $mpn
     * @param string $sku
     * @param string $gtin13
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
    )
    {
    }

    public function saveToBigData()
    {
        DB::connection('bigdata')->transaction(function () {
            $db = DB::connection('bigdata');

            $db->table('products')->updateOrInsert(
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

            $db->table('product_oems')->insertOrIgnore(array_map(fn($oem) => array_merge($oem, ['product_id' => $this->id]), $this->oems));

            $db->table('product_cars')->insertOrIgnore(
                array_map(fn($vehicleId) => [
                    'product_id' => $this->id,
                    'car_id' => $vehicleId,
                ], $this->vehicles)
            );
        });
    }

    public static function fromBigData(Ocp\Product $product)
    {
        $oems = $product->oems->map(fn(Ocp\ProductOem $oem) => [
            'brand' => $oem->brand,
            'oem' => $oem->oem,
        ])->toArray();

        $vehicleIds = $product->cars->pluck('car_id')->toArray();

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

    public function saveToDatabase(int $product_id)
    {
        DB::transaction(function () use ($product_id) {
            ProductOem::insertOrIgnore(array_map(fn($oem) => array_merge($oem, ['logicalref' => $product_id]), $this->oems));

            $product = Product::findOrFail($product_id, ['id', 'tecdoc', 'specifications']);
            $product->update([
                'specifications' => $this->specs,
                'tecdoc' => array_merge($product->tecdoc ?? [], $this->tecdoc),
            ]);

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
