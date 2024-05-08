<?php

namespace App\Services\Bots;

use App\Models\BotProduct;
use App\Models\Log;
use App\Models\Ocp;
use App\Packages\Fuzz;

/**
 * TODO: Associate Products with SearchPages
 * TODO: Add SearchAjax
 */
class OnlineCarParts
{
    private readonly OnlineCarParts\DataProvider $data;

    public function __construct(
        public readonly string  $keyword,
        public readonly int     $product_id,
        public readonly string  $field,
        public readonly ?string $brand_filter = null,
        public readonly bool    $regexed = false,
    )
    {
        $this->data = new OnlineCarParts\DataProvider();
    }

    public function smash(): bool
    {
        if ($this->scrape()) return true;
        if ($this->regexed) return false;

        $regexedBot = new OnlineCarParts(
            keyword: Fuzz::regexify($this->keyword),
            product_id: $this->product_id,
            field: $this->field,
            brand_filter: $this->brand_filter,
            regexed: true,
        );

        return $regexedBot->scrape();
    }

    public function scrape(): bool
    {
        $isOemSearch = $this->field === 'oem_codes';

        try {
            $searchPage = $this->data->getSearchPage($this->keyword, $isOemSearch);
        } catch (OcpClientException $e) {
            if ($this->field === 'oem_codes' && $e->statusCode === 404) {
                $this->log("OnlineCarParts $this->keyword OEM kodunu tanımıyor. | Aranan sayfa: $e->url");
                return false;
            } else {
                throw $e;
            }
        }

        if ($this->brand_filter) {
            $brandId = $searchPage->getBrandId($this->brand_filter);
            if (!$brandId) {
                $this->log('Marka arama sayfasında bulunamadı.');
                return false;
            }
        } else {
            $brandId = null;
        }

        $successfulProductCount = 0;
        for ($pageNumber = 1; $pageNumber <= $searchPage->pageCount; $pageNumber++) {
            $links = $this->getProductLinksForPage($searchPage, $pageNumber, $brandId);

            foreach ($links as $link) {
                if (self::saveProductPage($link)) {
                    $successfulProductCount++;
                }
            }

            $count = count($links);
            if (!$isOemSearch && $count !== 0) {
                $this->log("$count adet ürün bulunduğu için arama $pageNumber. sayfada sonlandırıldı.");
                break;
            }
        }

        $this->log("$successfulProductCount Adet ürün çekildi.");

        return $successfulProductCount > 0;
    }

    private function log(string $message): void
    {
        Log::create([
            'product_id' => $this->product_id,
            'message' => $message .
                " | Anahtar Kelime: $this->keyword" .
                " | Alan: $this->field" .
                ' | Sembolsüz: ' . ($this->regexed ? 'Evet' : 'Hayır') .
                ($this->brand_filter !== null ? " | Marka filtresi: $this->brand_filter" : ''),
        ]);
    }

    public function getProductLinksForPage(Ocp\SearchPage $searchPage, int $pageNumber, ?int $brandId)
    {
        $matchArticleNo = $this->field === 'producercode' || $this->field === 'producercode2' || $this->field === 'cross_code' || $this->field === 'abk';
        $articleNo = $matchArticleNo ? $this->keyword : null;

        $productLinks = $this->data->getSearchPageProductLinks($searchPage, $pageNumber, $brandId, $articleNo);

        $this->log("$pageNumber. Sayfadan " . count($productLinks) . ' adet ürün bulundu.');
        return $productLinks;
    }

    public function saveProductPage(string $url): bool
    {
        $connection = BotProduct::firstOrNew(
            ['product_id' => $this->product_id, 'url' => $url],
            ['origin_field' => $this->field, 'keyword' => $this->keyword]
        );
        if ($connection->is_banned) return false;

        $this->data
            ->getProductPage($url)
            ->saveToDatabase($this->product_id);

        return true;
    }
}
