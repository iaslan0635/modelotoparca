<?php

namespace App\Importers;

use App\Models\Product;
use App\Models\Property;

class FilterImporter extends Importer
{
    const LOGICALREF_COLUMN = "H";

    public static function getUsedTables(): array
    {
        return ['property_values', 'product_property_value'];
    }

    public function import(?callable $statusHook = null)
    {
        $statusHook ??= $this->noop();

        $properties = Property::all();

        for ($i = 2; $i <= $this->getRowCount(); $i++) {
            $statusHook($i);
            $getCell = $this->makeCellGetter($i);
            $id = $getCell(static::LOGICALREF_COLUMN);

            /** @var Property $property */
            foreach ($properties as $property) {
                $cell = $property->excel_column;
                if (!$cell) continue;

                $product = Product::find($id, "id");
                if (!$product) continue;

                $value = $getCell($cell);
                if (!$value) continue;

                $product->propertyValues()->create([
                    "property_id" => $property->id,
                    "value" => $value
                ]);
            }
        }
    }
}
