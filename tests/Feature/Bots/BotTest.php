<?php

namespace Bots;

use App\Jobs\Import\ExcelImport;
use App\Models\BotProduct;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class BotTest extends TestCase
{
    use RefreshDatabase;

    public static function searchPredenceProvider()
    {
        return [
            [[
                "id" => 84772,
                "producercode" => "WBA1007",
                "cross_code" => "",
                "oem_codes" => "7701205519,7701208061",
                "producercode2" => "",
                "abk" => "1987475253",
            ], "abk", "https://www.onlinecarparts.co.uk/bosch-708617.html"],
        ];
    }

    #[DataProvider('searchPredenceProvider')]
    public function testSearchPredence($product, $expectedField, $expectedUrl)
    {
        $rowData = [
            "id" => $product["id"],
            "active" => 0,
            "card_type" => 1,
            "code" => "30-7701205519",
            "name" => "NAME",
            "name2" => "NAME",
            "name3" => "NAME",
            "name4" => "NAME",
            "stgrpcode" => "stgrpcode",
            "producercode" => $product["producercode"],
            "specode" => "specode",
            "specode2" => "specode2",
            "salesbrws" => 1,
            "dominantref" => 0,
            "image1" => 0,
            "image2" => 0,
            "unitsetref" => 9,
            "markref" => 1683,
            "sellprvat" => 20,
            "cross_code" => $product["cross_code"],
            "oem_codes" => $product["oem_codes"],
            "producercode2" => $product["producercode2"],
            "web_name" => "web_name",
            "similar_product_codes" => "similar_product_codes",
            "minimum_sales_amount" => 0,
            "market_place" => null,
            "kbt" => 45274,
            "ptype" => 2,
            "definition" => "SFT",
            "begin_date" => 45274,
            "end_date" => 45291,
            "price" => 209.63,
            "currency" => 160,
            "incvat" => 0,
            "sales_discount_rate" => 0.3,
            "fitting_position" => "ARKA",
            "onhand" => 0,
            "condition" => "NEW",
            "abk" => $product["abk"],
        ];
        ExcelImport::dispatchSync($rowData);

        $botProducts = BotProduct::all();
        $this->assertCount(1, $botProducts);

        $botProduct = $botProducts->first();
        $this->assertEquals($rowData["id"], $botProduct->product_id);
        $this->assertEquals($expectedUrl, $botProduct->url);
        $this->assertFalse($botProduct->is_banned);
        $this->assertEquals($expectedField, $botProduct->origin_field);
        $this->assertEquals($rowData[$expectedField], $botProduct->keyword);
    }
}
