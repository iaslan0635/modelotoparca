<?php

namespace Tests\Unit;

use App\Facades\TaxFacade;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class TaxFacadeTest extends TestCase
{
    public static function taxProvider(): array
    {
        return [
            ['price' => 100, 'taxRate' => 10, 'priceWithTaxRate' => 110],
            ['price' => 50, 'taxRate' => 5, 'priceWithTaxRate' => 52.5],
            ['price' => 200, 'taxRate' => 15, 'priceWithTaxRate' => 230],
        ];
    }

    #[DataProvider('taxProvider')]
    public function testCalculate(int $price, int $taxRate, float $priceWithTaxRate)
    {
        $this->assertEquals($priceWithTaxRate, (float) (TaxFacade::calculate($price, $taxRate)));
    }

    #[DataProvider('taxProvider')]
    public function testReverseCalculate(int $price, int $taxRate, float $priceWithTaxRate)
    {
        $this->assertEquals($price, TaxFacade::reverseCalculate($priceWithTaxRate, $taxRate));
    }
}
