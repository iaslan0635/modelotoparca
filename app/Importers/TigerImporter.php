<?php

namespace App\Importers;

use App\Models\Price;
use App\Models\Product;
use Illuminate\Support\Str;

class TigerImporter extends Importer
{
    const CURRENCY_MAP = [
        160 => "try",
        1 => "usd",
        20 => "eur",
    ];

    public function mapData(int $row)
    {
        $c = $this->makeCellGetter($row);

        $id = $c('B');
        $title = $c('X') ?? $c('F');
        $allWebNames = implode(" ", [$c('F'), $c('G'), $c('H'), $c('I')]);

        return [
            "product" => [
                'id' => $id,
                'brand_id' => $c('S'),
                'title' => $title,
                'sub_title' => $allWebNames,
                'description' => $allWebNames,
                'slug' => Str::slug($title) . "-" . $id,
                'sku' => $c('E'),
                'quantity' => $c('AL'),
                'status' => intval($c('C')) === 0,
                'type' => "simple",
                'ecommerce' => intval($c("AA")) === 1,
                'part_number' => $c('U'),
                'producercode' => $c('K'),
                'producercode2' => $c('W'),
                'cross_code' => $c('U'),
                'oem_codes' => $c('V'),
                'similar_product_codes' => $c('Y'),
                'fitting_position' => $c('AK'),

                '_category' => $c("O"),
            ],
            "price" => [
                'product_id' => $id,
                'price' => $c('AG'),
                'currency' => self::CURRENCY_MAP[intval($c('AH'))],
            ]
        ];
    }

    public function import(callable|null $statusHook = null)
    {
        $statusHook ??= $this->noop();
        $ids = [];
        Product::withoutSyncingToSearch(function () use ($statusHook, &$ids) {
            for ($i = 2; $i <= $this->getRowCount(); $i++) {
                $statusHook($i);
                ["product" => $productData, "price" => $priceData] = $this->mapData($i);

                $productId = $this->pop($productData, "id");
                $categoryId = $this->pop($productData, "_category");
                $priceProductId = $this->pop($priceData, "product_id");

                $product = Product::updateOrCreate(["id" => $productId], $productData);
                $product->price()->updateOrCreate(["product_id" => $priceProductId], $priceData);
                $product->categories()->syncWithoutDetaching([$categoryId]);
                $ids[] = $product->id;
            }
        });
        Product::whereNotIn("id", $ids)->delete();
        Price::whereNotIn("product_id", $ids)->delete();
        if ($this->shouldAddToIndex())
            Product::query()->searchable();
    }
}
