<?php

namespace App\Importers;

use App\Models\Brand;
use Illuminate\Support\Str;

class BrandImporter extends Importer
{
    public static function getUsedTables(): array
    {
        return ['brands'];
    }

    public function getRowCount(): int
    {
        return $this->sheet->getHighestRow('B');
    }

    public function import()
    {
        for ($i = 2; $i <= $this->getRowCount(); $i++) {
            $this->status($i);
            $getCell = $this->makeCellGetter($i);
            $id = $getCell('A');
            $code = $getCell('B');
            $desc = $getCell('C');

            Brand::updateOrCreate([
                'id' => $id,
            ], [
                'name' => $code,
                'slug' => Str::slug($code),
                'botname' => $desc,
            ]);
        }
    }
}
