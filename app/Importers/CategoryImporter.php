<?php

namespace App\Importers;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryImporter extends Importer
{

    /** @inheritDoc */
    public static function getUsedTables(): array
    {
        return ['categories'];
    }

    public function import()
    {
        for ($i = 2; $i <= $this->getRowCount(); $i++) {
            $this->reportStatus($i);
            $getCell = $this->makeCellGetter($i);

            $id = $getCell('A');
            if (!$id) break;

            $name = $getCell('E');
            $parentId = $getCell('H');
            $slug = Str::slug($name) . "-" . $id;

            if ($parentId == 0) {
                $parentId = null;
            }

            Category::updateOrCreate(
                ['id' => $id],
                [
                    'name' => $name,
                    'slug' => $slug,
                    'parent_id' => $parentId,
                ]
            );
        }
    }
}
