<?php

namespace App\Importers;

use App\Models\Product;

class AlternativeImporter extends Importer
{

    public function getRowCount(): int
    {
        return $this->sheet->getHighestRow('B');
    }

    public function import(callable|null $statusHook = null)
    {
        $statusHook ??= fn(int $_) => null;
        $H = $this->getRowCount();
        Product::withoutSyncingToSearch(function () use ($statusHook, $H) {
            $mainRefs = collect($this->sheet->rangeToArray("B2:B$H"))->pluck(0);
            $subRefs = collect($this->sheet->rangeToArray("C2:C$H"))->pluck(0);

            $refMap = [];

            foreach ($mainRefs as $i => $ref) {
                $refMap[$ref][] = $subRefs[$i];
            }

            $i = 1;
            foreach ($refMap as $mainRef => $subs) {
                $i += count($subs);
                $statusHook($i);
                $products = Product::query()->where('id', $mainRef)->get("id");
                foreach ($products as $product) {
                    $product->alternatives()->syncWithoutDetaching($subs);
                }
            }
        });
    }
}
