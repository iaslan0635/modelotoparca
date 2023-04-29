<?php

namespace App\Importers;

use Carbon\CarbonImmutable;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TigerImporter
{
    const CURRENCY_MAP = [

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


        return [
            "product" => [
                'id' => $c('B'),
                'brand_id' => $c(''),
                'title' => $c('X'),
                'sub_title' => $c('F') . $c('G') . $c('H') . $c('I'),
                'description' => $c(''),
                'slug' => $c(''),
                'sku' => $c('E'),
                'quantity' => $c('AL'),
                'status' => $c(''),
                'type' => $c(''),
                'ecommerce' => $c("AA") == 1,
                'part_number' => $c('U'),
                'producercode' => $c('K'),
                'producercode2' => $c('W'),
                'cross_code' => $c('U'),
                'oem_codes' => $c('V'),
                'similar_product_codes' => $c('Y'),
            ],
            "price" => [
                'product_id' => $c('B'),
                'variant_id' => $c(''),
                'tax_id' => $c(''),
                'price' => $c('AG'),
                'currency' => $c('AH'),
                'discount' => $c(''),
                'discount_title' => $c(''),
                'discount_description' => $c(''),
                'discount_type' => $c(''),
                'discount_amount' => $c(''),
                'discount_start_at' => $c(''),
                'discount_end_at' => $c(''),
            ]
        ];
    }

    public function import()
    {
        $highestRow = $this->sheet->getHighestRow();
        for ($i = 2; $i <= $highestRow; $i++) {
            ["product" => $product, "price" => $price] = $this->mapData($i);

        }
    }
}
