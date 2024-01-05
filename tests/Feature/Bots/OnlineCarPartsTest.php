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
            field: "testing", // disable article no filter
            brand_filter: $brand
        );

        $links = $bot->searchProducts();
        $resultBrands = array_map(fn($link) => $bot->getProduct($link)->brand, $links);

        $this->assertEquals($shouldFind ? [$brand] : [], array_unique($resultBrands));
    }

    public static function searchProductsFiltersArticleIdProvider()
    {
        return [
            ["MH10026", true],
            ["Brake Disc", false],
            ["06-00400", false],
        ];
    }

    #[DataProvider('searchProductsFiltersArticleIdProvider')]
    public function testSearchProductsFiltersArticleId(string $code, bool $shouldFind)
    {
        $bot = new OnlineCarParts(
            keyword: $code,
            product_id: 0,
            field: "producercode",
        );

        $links = $bot->searchProducts();
        $resultArticleIds = array_map(fn($link) => $bot->getProduct($link)->articleId, $links);

        $this->assertEquals($shouldFind ? [$code] : [], array_unique($resultArticleIds));
    }
}
