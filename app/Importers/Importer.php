<?php

namespace App\Importers;

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

abstract class Importer
{
    protected Worksheet $sheet;

    public function __construct(string $file)
    {
        $spreadsheet = (new Xlsx())->load($file);
        $this->sheet = $spreadsheet->getActiveSheet();
    }

    public function getRowCount(): int
    {
        return $this->sheet->getHighestRow();
    }

    protected function pop(array &$array, string $key)
    {
        $value = $array[$key];
        unset($array[$key]);
        return $value;
    }

    protected function makeCellGetter(int $row)
    {
        return function ($column) use ($row) {
            $value = $this->sheet->getCell("$column$row")->getValue();
            return $value instanceof RichText ? $value->getPlainText() : $value;
        };
    }

    public abstract function import(callable|null $statusHook = null);
}
