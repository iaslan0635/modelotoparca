<?php

namespace App\Importers;

use App\Bots\SparetoBotBatch;
use App\Facades\SparetoConnector;
use App\Models\Category;
use App\Models\Price;
use App\Models\Product;
use App\Models\ProductOem;
use App\Models\ProductSimilar;
use App\Models\SparetoConnection;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TigerImporter extends Importer
{
    const CURRENCY_MAP = [
        160 => "try",
        1 => "usd",
        20 => "eur",
    ];

    const IMAGE_11 = 0b10;
    const IMAGE_12 = 0b01;

    public function __construct(string $file, public readonly bool $appendMode = false)
    {
        parent::__construct($file);
    }


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

        $image_appendix = 0;
        if ($c('P')) $image_appendix |= self::IMAGE_11; // IMAGEINC
        if ($c('Q')) $image_appendix |= self::IMAGE_12; // IMAGE2INC

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
                'image_appendix' => $image_appendix,
                'abk' => $c("AN"),

                '_category' => $c("O"),
            ],
            "price" => [
                'product_id' => $id,
                'price' => $c('AG'),
                'currency' => Arr::get(self::CURRENCY_MAP, intval($c('AH')), "try"),
            ]
        ];
    }

    public function import(callable|null $statusHook = null)
    {
        $batchId = Str::ulid();
        $statusHook ??= $this->noop();
        for ($i = 2; $i <= $this->getRowCount(); $i++) {
            $statusHook($i);
            [
                "product" => $productData,
                "price" => $priceData,
            ] = $this->mapData($i);

            $productId = $this->pop($productData, "id");
            $categoryId = $this->pop($productData, "_category");

            if ($productId === null) continue;
            $product = Product::findOrNew($productId);
            $product->fill($productData + ["id" => $productId, "batch_id" => $batchId]);
            if ($product->exists) {
                $dirty = array_keys($product->getDirty());
                $botProps = [
                    "producercode",
                    "cross_code",
                    "oem_codes",
                    "abk",
                ];
                $isBotChanged = false;
                foreach ($botProps as $prop) {
                    if (array_search($prop, $dirty)) {
                        $isBotChanged = true;
                        break;
                    }
                }
                if ($isBotChanged) {
                    $connections = SparetoConnection::whereNot("connected_by", "manual")->where("product_id", $product->id)->get();
                    foreach ($connections as $connection) {
                        SparetoConnector::disconnect($connection, true);
                    }
                }
            }
            $product->save();

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

            $product->searchable();
        }

        SparetoBotBatch::dispatchForAll($batchId);

        if (!$this->appendMode)
            Product::whereNot("batch_id", $batchId)->update(["status" => "0"]);

        ProductSimilar::query()->searchable();
        Category::query()->searchable();
    }
}
