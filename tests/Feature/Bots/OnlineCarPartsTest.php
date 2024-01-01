<?php

namespace Bots;

use App\Services\Bots\OnlineCarParts;
use PHPUnit\Framework\TestCase;

class OnlineCarPartsTest extends TestCase
{

    /** Tests that OnlineCarParts::searchProducts() filters brands */
    public function testSearchProductsFiltersBrands()
    {
        $bot = new OnlineCarParts(
            keyword: "Brake Disc",
            product_id: 0,
            field: "producercode",
            brand_filter: "RIDEX"
        );

        $links = $bot->searchProducts();
        $resultBrands = array_map(fn($link) => $bot->getProduct($link)["brand"], $links);

        // Assert that all brands are RIDEX
        $this->assertEquals(["RIDEX"], array_unique($resultBrands));
    }
}
