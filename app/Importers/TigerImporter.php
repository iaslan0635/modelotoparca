<?php

namespace App\Importers;

use App\Models\Product;
use Carbon\CarbonImmutable;
use Illuminate\Support\Str;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TigerImporter
{
    const CURRENCY_MAP = [
        160 => "try",
        1 => "usd",
        20 => "eur",
    ];

    private Worksheet $sheet;

    public function __construct(string $file)
    {
        $year = CarbonImmutable::create(1900);
        $spreadsheet = (new Xlsx())->load($file);
        $this->sheet = $spreadsheet->getActiveSheet();
    }

    public function mapData($row)
    {
        $c = function ($column) use ($row) {
            $value = $this->sheet->getCell("$column$row")->getValue();
            return $value instanceof RichText ? $value->getPlainText() : $value;
        };

        $id = $c('B');
        $title = $c('X') ?? $c('F');
        $allWbNames = $c('F') . $c('G') . $c('H') . $c('I');

        return [
            "product" => [
                'id' => $id,
                'brand_id' => $c('S'),
                'title' => $title,
                'sub_title' => $allWbNames,
                'description' => $allWbNames,
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
                '_category' => $c("O"),
            ],
            "price" => [
                'product_id' => $id,
                'price' => $c('AG'),
                'currency' => self::CURRENCY_MAP[intval($c('AH'))],
            ]
        ];
    }

    private static function pop(&$array, $key)
    {
        $value = $array[$key];
        unset($array[$key]);
        return $value;
    }

    public function getRowCount()
    {
        return $this->sheet->getHighestRow();
    }

    public function import($statusHook = null)
    {
        $statusHook ??= fn(int $_) => null;
        $productIds = [];
        Product::withoutSyncingToSearch(function () use ($statusHook, &$productIds) {
            for ($i = 2; $i <= $this->getRowCount(); $i++) {
                $statusHook($i);
                ["product" => $productData, "price" => $priceData] = $this->mapData($i);

                $productId = self::pop($productData, "id");
                $categoryId = self::pop($productData, "_category");
                $priceProductId = self::pop($priceData, "product_id");

                $product = Product::updateOrCreate(["id" => $productId], $productData);
                $product->price()->updateOrCreate(["product_id" => $priceProductId], $priceData);
                $product->categories()->syncWithoutDetaching([$categoryId]);
                $productIds[] = $product->id;
            }
        });
        Product::query()->whereIn("id", $productIds)->searchable();
    }
}
