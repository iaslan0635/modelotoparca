<?php

namespace App\Importers;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ExcelImport implements ToModel, WithStartRow
{
    public const PRODUCT_DATA_MAPPING = [
        1 => 'id',
        2 => 'active',
        3 => 'card_type',
        4 => 'code',
        5 => 'name',
        6 => 'name2',
        7 => 'name3',
        8 => 'name4',
        9 => 'stgrpcode',
        10 => 'producercode',
        11 => 'specode',
        12 => 'specode2',
        13 => 'salesbrws',
        14 => 'dominantref',
        15 => 'image1',
        16 => 'image2',
        17 => 'unitsetref',
        18 => 'markref',
        19 => 'sellprvat',
        20 => 'cross_code',
        21 => 'oem_codes',
        22 => 'producercode2',
        23 => 'web_name',
        24 => 'similar_product_codes',
        25 => 'minimum_sales_amount',
        26 => 'market_place',
        27 => 'kbt',
        28 => 'ptype',
        29 => 'definition',
        30 => 'begin_date',
        31 => 'end_date',
        32 => 'price',
        33 => 'currency',
        34 => 'incvat',
        35 => 'sales_discount_rate',
        36 => 'fitting_position',
        37 => 'onhand',
        38 => 'condition',
        39 => 'abk',
        40 => 'raf_no',
        41 => 'stock_on_51',
        42 => 'stock_on_38',
        43 => 'stock_on_01',
        44 => 'PROJECTREF',
    ];

    public function model(array $row)
    {
        if ($row[1] === null) {
            return;
        } // skip if id is null (probably empty row)

        $productData = [];
        foreach (self::PRODUCT_DATA_MAPPING as $index => $key) {
            $productData[$key] = $row[$index];
        }

        dispatch(new \App\Jobs\Import\ExcelImport($productData));
    }

    public function startRow(): int
    {
        return 2;
    }
}
