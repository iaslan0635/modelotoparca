<?php

namespace App\Importers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class AlternativeImporter extends Importer
{
    public static function getUsedTables(): array
    {
        return ['alternatives'];
    }

    public function getRowCount(): int
    {
        return $this->sheet->getHighestRow('B');
    }

    public function import()
    {
        $H = $this->getRowCount();
        Product::withoutSyncingToSearch(function () use ($H) {
            $mainRefs = collect($this->sheet->rangeToArray("B2:B$H"))->pluck(0);
            $subRefs = collect($this->sheet->rangeToArray("C2:C$H"))->pluck(0);

            $refMap = [];

            foreach ($mainRefs as $i => $ref) {
                $refMap[$ref][] = $subRefs[$i];
            }

            $i = 1;
            foreach ($refMap as $mainRef => $subs) {
                $i += count($subs);
                $this->reportStatus($i);

                foreach ($subs as $sub) {
                    DB::table('alternatives')->insertOrIgnore([
                        'product_id' => $mainRef,
                        'alternative_id' => $sub,
                    ]);
                }
            }

                        $allMainRefs = array_keys($refMap);
                        DB::table("alternatives")->whereNotIn("product_id", $allMainRefs)->delete();
        });
    }
}
