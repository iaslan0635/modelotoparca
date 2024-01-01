<?php

namespace Bots;

use App\Services\Bots\OnlineCarParts;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class OnlineCarPartsTest extends TestCase
{
    public static function searchProductsFiltersBrandsProvider()
    {
        return [
            ["SKF", true],
            ["ABA", false],
            ["TOPRAN", true],
            ["ADIDAS", false],
        ];
    }

    /** Tests that OnlineCarParts::searchProducts() filters brands */
    #[DataProvider('searchProductsFiltersBrandsProvider')]
    public function testSearchProductsFiltersBrands(string $brand, bool $shouldFind)
    {
        $bot = new OnlineCarParts(
            keyword: "YP203294",
            product_id: 0,
            field: "producercode",
            brand_filter: $brand
        );

        $links = $bot->searchProducts();
        $resultBrands = array_map(fn($link) => $bot->getProduct($link)->brand, $links);

        $this->assertEquals($shouldFind ? [$brand] : [], array_unique($resultBrands));
    }
}
