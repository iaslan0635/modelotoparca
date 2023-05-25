<?php

namespace App\Importers;

use App\Bots\SparetoBot;
use App\Jobs\SparetoConnectJob;
use App\Models\Price;
use App\Models\Product;
use App\Models\ProductOem;
use App\Models\ProductSimilar;
use App\Models\SparetobotDone;
use Illuminate\Bus\Batch;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class TigerImporter extends Importer
{
    const CURRENCY_MAP = [
        160 => "try",
        1 => "usd",
        20 => "eur",
    ];

    public static function getUsedTables(): array
    {
        return ["products", "prices", "product_similars"];
    }

    private function explode(string|null $str)
    {
        return $str === null ? null : array_map(fn($s) => trim($s), explode(",", $str));
    }

    private function removeFirstWord(string|null $string)
    {
        if ($string === null) return null;
        else {
            $string = trim($string);
            $pos = strpos($string, ' ');
            if (!$pos) return $string;
            else return substr($string, $pos + 1);
        }
    }


    public function mapData(int $row)
    {
        $c = $this->makeCellGetter($row);

        $id = $c('B');
        $title = $c('X') ?? $c('F');
        $allWebNames = implode(" ", [$c('F'), $c('G'), $c('H'), $c('I')]);
        $oems = $c('V');

        return [
            "product" => [
                'id' => $id,
                'brand_id' => $c('S'),
                'title' => $title,
                'sub_title' => $allWebNames,
                'description' => $allWebNames,
                'slug' => Str::slug($title) . "-" . $id,
                'sku' => $c('E'),
                'quantity' => $c('AL'),
                'status' => intval($c('C')) === 0,
                'type' => "simple",
                'ecommerce' => intval($c("AA")) === 1,
                'part_number' => $c('U'),
                'producercode' => $this->removeFirstWord($c('K')),
                'producercode2' => $this->removeFirstWord($c('W')),
                'cross_code' => $c('U'),
                'oem_codes' => $oems,
                'similar_product_codes' => $c('Y'),
                'fitting_position' => $c('AK'),

                '_category' => $c("O"),
            ],
            "price" => [
                'product_id' => $id,
                'price' => $c('AG'),
                'currency' => self::CURRENCY_MAP[intval($c('AH'))],
            ]
        ];
    }

    public function import(callable|null $statusHook = null)
    {
        $statusHook ??= $this->noop();
        $ids = [];
        Product::withoutSyncingToSearch(function () use ($statusHook, &$ids) {
            for ($i = 2; $i <= $this->getRowCount(); $i++) {
                $statusHook($i);
                [
                    "product" => $productData,
                    "price" => $priceData,
                ] = $this->mapData($i);

                $productId = $this->pop($productData, "id");
                $categoryId = $this->pop($productData, "_category");

                $product = Product::updateOrCreate(["id" => $productId], $productData);

                $oems = $this->explode($productData["oem_codes"]) ?? [];
                foreach ($oems as $oem)
                    ProductOem::updateOrCreate(["logicalref" => $productId, "oem" => $oem, "brand" => ""]);

                $priceProductId = $this->pop($priceData, "product_id");
                Price::query()->updateOrInsert(["product_id" => $priceProductId], $priceData);

                DB::table("product_categories")->insertOrIgnore([
                    "product_id" => $productId,
                    "category_id" => $categoryId
                ]);

                $similars = $this->explode($productData["similar_product_codes"]) ?? [];
                foreach ($similars as $similar)
                    DB::table("product_similars")->insertOrIgnore([
                        "product_id" => $productId,
                        "code" => $similar
                    ]);

                $ids[] = $product->id;
            }
        });

//        Product::whereNotIn("id", $ids)->delete();
//        Price::whereNotIn("product_id", $ids)->delete();

        if ($this->shouldAddToIndex()) {
            ProductSimilar::query()->searchable();
            Product::whereIn("id", $ids)->searchable();
            Log::info("Added to index");
        }

        SparetobotDone::truncate();
        $jobs = [];
        foreach (Product::whereIn("id", $ids)->cursor() as $product)
            array_push($jobs, ...SparetoBot::newForAllFields($product));

        Bus::batch($jobs)
            ->then(function () use ($ids) {
                foreach ($ids as $id)
                    SparetoConnectJob::dispatch($id);
            })->dispatch();
    }
}
