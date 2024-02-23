<?php

namespace App\Exporters;

use App\Importers\ExcelImport;
use Illuminate\Support\Traits\EnumeratesValues;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ProductExporter
{
    use EnumeratesValues;

    const HEADERS = [
        "EXTACCESSFLAGS",
        "LOGICALREF",
        "ACTIVE",
        "CARDTYPE",
        "CODE",
        "NAME",
        "NAME2",
        "NAME3",
        "NAME4",
        "STGRPCODE",
        "PRODUCERCODE",
        "SPECODE",
        "SPECODE2",
        "SALESBRWS",
        "DOMINANTREFS5",
        "IMAGEINC",
        "IMAGE2INC",
        "UNITSETREF",
        "MARKREF",
        "SELLPRVAT",
        "CROSS_CODE",
        "OEM CODES",
        "PRODUCERCODE2",
        "WEB NAME",
        "SIMILAR PRODUCT CODES",
        "MINIMUM SALES AMOUNT",
        "MARKET PLACE",
        "KBT",
        "PTYPE",
        "DEFINITION_",
        "BEGDATE",
        "ENDDATE",
        "PRICE",
        "Currency",
        "INCVAT",
        "SALES DISCOUNT RATE",
        "FITTING POSITION",
        "ONHAND",
        "CONDITION",
        "ABK",
    ];

    public static function export($tigerProducts)
    {
        $spreadsheet = new Spreadsheet();
        $activeWorksheet = $spreadsheet->getActiveSheet();

        foreach (self::HEADERS as $i => $HEADER) {
            $activeWorksheet->setCellValue([$i + 1, 1], $HEADER);
        }

        $row = 2;
        foreach ($tigerProducts as $tigerProduct) {
            foreach (ExcelImport::PRODUCT_DATA_MAPPING as $index => $key) {
                $data = $tigerProduct->getAttribute($key);
                $activeWorksheet->setCellValue([$index + 1, $row], $data);
            }
            $row++;
        }

        return new Xlsx($spreadsheet);
    }
}
