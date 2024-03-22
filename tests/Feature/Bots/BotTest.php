<?php

namespace Bots;

use App\Jobs\Import\ExcelImport;
use App\Models\BotProduct;
use App\Models\Log;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class BotTest extends TestCase
{
    use RefreshDatabase;

    public static function searchPredenceProvider()
    {
        return [
            [
                [
                    'id' => 84772,
                    'producercode' => 'WBA1007',
                    'cross_code' => null,
                    'oem_codes' => '7701205519,7701208061',
                    'producercode2' => null,
                    'abk' => '1987475253',
                ],
                'abk', 'https://www.onlinecarparts.co.uk/bosch-708617.html',
            ],
            [
                [
                    'id' => 81482,
                    'producercode' => 'KI-8003A',
                    'cross_code' => null,
                    'oem_codes' => '495012F060,495012F510',
                    'producercode2' => null,
                    'abk' => 'MAPCO@36391',
                ],
                'abk', 'https://www.onlinecarparts.co.uk/mapco-18754940.html',
            ],
        ];
    }

    #[DataProvider('searchPredenceProvider')]
    public function testSearchPredence($product, $expectedField, $expectedUrl)
    {
        $this->markTestSkipped("This test does not work for paginated bot.");

        Mockery::mock('overload:' . Log::class)
            ->shouldReceive('create')
            ->andReturnUsing(function ($data) {
                dump($data);

                return true;
            });

        $rowData = [
            'id' => $product['id'],
            'active' => 0,
            'card_type' => 1,
            'code' => '30-7701205519',
            'name' => 'NAME',
            'name2' => 'NAME',
            'name3' => 'NAME',
            'name4' => 'NAME',
            'stgrpcode' => 'stgrpcode',
            'producercode' => $product['producercode'],
            'specode' => 'specode',
            'specode2' => 'specode2',
            'salesbrws' => 1,
            'dominantref' => 0,
            'image1' => 0,
            'image2' => 0,
            'unitsetref' => 9,
            'markref' => 1683,
            'sellprvat' => 20,
            'cross_code' => $product['cross_code'],
            'oem_codes' => $product['oem_codes'],
            'producercode2' => $product['producercode2'],
            'web_name' => 'web_name',
            'similar_product_codes' => 'similar_product_codes',
            'minimum_sales_amount' => 0,
            'market_place' => null,
            'kbt' => 45274,
            'ptype' => 2,
            'definition' => 'SFT',
            'begin_date' => 45274,
            'end_date' => 45291,
            'price' => 209.63,
            'currency' => 160,
            'incvat' => 0,
            'sales_discount_rate' => 0.3,
            'fitting_position' => 'ARKA',
            'onhand' => 0,
            'condition' => 'NEW',
            'abk' => $product['abk'],
        ];
        ExcelImport::dispatchSync($rowData);

        $botProducts = BotProduct::all();
        if ($botProducts->count() > 1) {
            $botProducts->dump();
        }

        $this->assertCount(1, $botProducts);

        $botProduct = $botProducts->first();
        $this->assertEquals($rowData['id'], $botProduct->product_id);
        $this->assertEquals($expectedField, $botProduct->origin_field);
        $this->assertEquals($expectedUrl, $botProduct->url);
        $this->assertFalse($botProduct->is_banned);
        $this->assertEquals($rowData[$expectedField], $botProduct->keyword);

    }
}
