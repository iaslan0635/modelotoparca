<?php

namespace App\Importers;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ExcelImport implements ToModel, WithStartRow
{
    public function model(array $row)
    {
        if ($row[1] === null) return; // skip if id is null (probably empty row)

        $productData = [
            'id' => $row[1],
            'active' => request()->input('type') === 'passive' ? 1 : $row[2],
            'card_type' => $row[3],
            'code' => $row[4],
            'name' => $row[5],
            'name2' => $row[6],
            'name3' => $row[7],
            'name4' => $row[8],
            'stgrpcode' => $row[9],
            'producercode' => $row[10],
            'specode' => $row[11],
            'specode2' => $row[12],
            'salesbrws' => $row[13],
            'dominantref' => $row[14],
            'image1' => $row[15],
            'image2' => $row[16],
            'unitsetref' => $row[17],
            'markref' => $row[18],
            'sellprvat' => $row[19],
            'cross_code' => $row[20],
            'oem_codes' => $row[21],
            'producercode2' => $row[22],
            'web_name' => $row[23],
            'similar_product_codes' => $row[24],
            'minimum_sales_amount' => $row[25],
            'market_place' => $row[26],
            'kbt' => $row[27],
            'ptype' => $row[28],
            'definition' => $row[29],
            'begin_date' => $row[30],
            'end_date' => $row[31],
            'price' => $row[32],
            'currency' => $row[33],
            'incvat' => $row[34],
            'sales_discount_rate' => $row[35],
            'fitting_position' => $row[36],
            'onhand' => $row[37],
            'condition' => $row[38],
            'abk' => $row[39],
        ];

        dispatch(new \App\Jobs\Import\ExcelImport($productData));
    }

    public function startRow(): int
    {
        return 2;
    }
}
