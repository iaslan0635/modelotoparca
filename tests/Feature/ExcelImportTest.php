<?php

namespace Tests\Feature;

use App\Jobs\BotJob;
use App\Jobs\Import\OuterExcelImportJob;
use App\Models\Product;
use App\Services\Bots\OnlineCarParts;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery\MockInterface;
use Queue;
use Tests\TestCase;

class ExcelImportTest extends TestCase
{
    use RefreshDatabase;

    private static string $dataPath = __DIR__ . '/../data';

    public function testChanges()
    {
        /*
          Changed products:
            2607: price = 16,33-> 15,33
            3899: cross_code = 30937116 -> 30937216
        */

        $excelPath = 'ITEMS WEB-5.xlsx';
        $changedExcelPath = 'ITEMS WEB-5-changed.xlsx';
        copy(self::$dataPath . "/$excelPath", storage_path("app/$excelPath"));
        copy(self::$dataPath . "/$changedExcelPath", storage_path("app/$changedExcelPath"));

        Queue::setDefaultDriver("sync");


        // Import the first file
        BotJob::mockBot(\Mockery::mock(
            OnlineCarParts::class,
            fn(MockInterface $mock) => $mock->shouldReceive("smash")->times(5)->andReturns(true)
        ));

        OuterExcelImportJob::dispatch($excelPath, false);
        $this->assertDatabaseCount('products', 5);


        // Import the same file and check if the bot is not called
        BotJob::mockBot(\Mockery::mock(
            OnlineCarParts::class,
            fn(MockInterface $mock) => $mock->shouldNotReceive("smash")
        ));

        OuterExcelImportJob::dispatch($excelPath, false);
        $this->assertDatabaseCount('products', 5);


        // Import the changed file and check if the bot is called
        BotJob::mockBot(\Mockery::mock(
            OnlineCarParts::class,
            fn(MockInterface $mock) => $mock->shouldReceive("smash")->withArgs([3899])->once()->andReturns(true)
        ));

        OuterExcelImportJob::dispatch($changedExcelPath, false);
        $this->assertDatabaseCount('products', 5);

        // assert that attributes are updated
        $price = Product::findOrFail(2607)->price->price;
        $this->assertEquals(15.33, $price);

        $crossCode = Product::findOrFail(3899)->cross_code;
        $this->assertEquals(30937216, $crossCode);
    }
}
