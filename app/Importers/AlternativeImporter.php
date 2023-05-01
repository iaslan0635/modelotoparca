<?php

namespace App\Importers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class AlternativeImporter extends Importer
{

    public function getRowCount(): int
    {
        return $this->sheet->getHighestRow('B');
    }

    public function import(callable|null $statusHook = null)
    {
        $statusHook ??= $this->noop();
        $H = $this->getRowCount();
        Product::withoutSyncingToSearch(function () use ($statusHook, $H) {
            $mainRefs = collect($this->sheet->rangeToArray("B2:B$H"))->pluck(0);
            $subRefs = collect($this->sheet->rangeToArray("C2:C$H"))->pluck(0);

            $refMap = [];

            foreach ($mainRefs as $i => $ref) {
                $refMap[$ref][] = $subRefs[$i];
            }

            $table = DB::table("alternatives");
            $i = 1;
            foreach ($refMap as $mainRef => $subs) {
                $i += count($subs);
                $statusHook($i);

                foreach ($subs as $sub)
                    $table->insertOrIgnore([
                        "product_id" => $mainRef,
                        "alternative_id" => $sub
                    ]);

//                $products = Product::query()->where('id', $mainRef)->get("id");
//                foreach ($products as $product) {
//                    $product->alternatives()->syncWithoutDetaching($subs);
//                }
            }
        });
    }
}
