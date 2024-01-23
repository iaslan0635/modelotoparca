<?php

namespace App\Importers;

use App\Models\Product;
use App\Models\Property;
use App\Models\PropertyValue;

class FilterImporter extends Importer
{
    public static function getUsedTables(): array
    {
        return ['property_values', 'product_property_value'];
    }

    public function import()
    {
        $properties = Property::all();
        $transformers = collect($this->getTransformers());

        for ($i = 2; $i <= $this->getRowCount(); $i++) {
            $this->status($i);
            $getCell = $this->makeCellGetter($i);
            $id = $getCell('H');

            /** @var Property $property */
            foreach ($properties as $property) {
                $cell = $property->excel_column;
                if (! $cell) {
                    continue;
                }

                $product = Product::find($id, 'id');
                if (! $product) {
                    continue;
                }

                $value = $getCell($cell);
                if (! $value) {
                    continue;
                }

                $transformer = $transformers->get($property->transformer);
                if ($transformer) {
                    $value = $transformer($value);
                }

                $propertyValue = PropertyValue::firstOrCreate([
                    'property_id' => $property->id,
                    'value' => $value,
                ]);

                $product->propertyValues()->attach($propertyValue->id);
            }
        }
    }

    private function getTransformers(): array
    {
        return [
            'only_float' => fn ($v) => floatval($v),
        ];
    }
}
