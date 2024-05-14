<?php

namespace App\Services\Bots;

use App\Models\BotProduct;
use App\Models\Log;
use App\Models\Ocp;
use App\Packages\Fuzz;


class OnlineCarParts
{
    public const VERSION = 1; // Used for logging

    private readonly OnlineCarParts\DataProvider $data;
    private readonly bool $isOem;

    public function __construct(
        public readonly string  $keyword,
        public readonly int     $product_id,
        public readonly string  $field,
        public readonly ?string $brand_filter = null,
        public readonly bool    $regexed = false,
        public readonly bool    $ajax = false,
    )
    {
        $this->data = new OnlineCarParts\DataProvider();
        $this->isOem = $this->field === 'oem_codes';
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
            ajax: $this->ajax,
        );

        return $regexedBot->scrape();
    }

    public function scrape(): bool
    {
        if ($this->ajax) {
            return $this->scrapeFromSearchAjax();
        } else {
            return $this->scrapeFromSearchPage();
        }
    }

    public function scrapeFromSearchAjax(): bool
    {
        $searchAjax = $this->data->getSearchAjax($this->keyword);
        $productLinks = $this->getProductLinksForAjax($searchAjax, $this->brand_filter);

        $successfulProductCount = 0;
        foreach ($productLinks as $i => $link) {
            $connection = $this->getConnection($link);
            if ($connection->is_banned) continue;

            $productPage = $this->data->getProductPage($link);
            $productPage->saveToDatabase($this->product_id);

            $searchAjax->products()->syncWithoutDetaching([
                $productPage->id => [
                    'type' => "product", // This may be 'oem' in the future
                    'index' => $i,
                ]
            ]);

            $successfulProductCount++;
            if (!$connection->exists) $connection->save();
        }

        $this->log("Ajax tarafından $successfulProductCount adet ürün çekildi.");

        return $successfulProductCount > 0;
    }

    public function scrapeFromSearchPage(): bool
    {
        try {
            $searchPage = $this->data->getSearchPage($this->keyword, $this->isOem);
        } catch (OcpClientException $e) {
            if ($this->isOem && $e->statusCode === 404) {
                $this->log("OnlineCarParts $this->keyword OEM kodunu tanımıyor.", ['Aranan sayfa' => $e->url]);
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

            foreach ($links as $i => $link) {
                $connection = $this->getConnection($link);
                if ($connection->is_banned) continue;

                $productPage = $this->data->getProductPage($link);
                $productPage->saveToDatabase($this->product_id);

                $searchPage->products()->syncWithoutDetaching([
                    $productPage->id => [
                        'page' => $pageNumber,
                        'index' => $i,
                        'brand_id' => $brandId
                    ]
                ]);

                $successfulProductCount++;
                if (!$connection->exists) $connection->save();
            }

            $count = count($links);
            if (!$this->isOem && $count !== 0) {
                $this->log("$count adet ürün bulunduğu için arama $pageNumber. sayfada sonlandırıldı.");
                break;
            }
        }

        $this->log("Arama sayfalarından $successfulProductCount adet ürün çekildi.");

        return $successfulProductCount > 0;
    }

    private function log(string $message, ?array $context = null): void
    {
        $logContext = [
            "Anahtar Kelime" => $this->keyword,
            "Alan" => $this->field,
            "Sembolsüz" => $this->regexed,
            "Marka filtresi" => $this->brand_filter ?? "(Yok)",
            "Ajax" => $this->ajax,
        ];

        if ($context) $logContext = array_merge($logContext, $context);

        Log::log($this->product_id, $message, $logContext, 'bot-v' . self::VERSION);
    }

    public function getProductLinksForPage(Ocp\SearchPage $searchPage, int $pageNumber, ?int $brandId)
    {
        $articleNo = $this->getArticleNo();
        $productLinks = $this->data->getSearchPageProductLinks($searchPage, $pageNumber, $brandId, $articleNo);

        $this->log("$pageNumber. Sayfadan " . count($productLinks) . ' adet ürün bulundu.');
        return $productLinks;
    }

    /** returns a collection of array{type: string, link: string} */
    public function getProductLinksForAjax(Ocp\SearchAjax $searchAjax, ?string $brandName)
    {
        $articleNo = $this->getArticleNo();
        return $this->data->getSearchAjaxProductLinks($searchAjax, $brandName, $articleNo);
    }

    private function getConnection(string $productUrl): \App\Models\BaseModel|BotProduct
    {
        return BotProduct::firstOrNew(
            ['product_id' => $this->product_id, 'url' => $productUrl],
            ['origin_field' => $this->field, 'keyword' => $this->keyword]
        );
    }

    private function getArticleNo(): ?string
    {
        $matchArticleNo = $this->field === 'producercode' || $this->field === 'producercode2' || $this->field === 'cross_code' || $this->field === 'abk';
        return $matchArticleNo ? $this->keyword : null;
    }

    public static function isOldVersion(string $logSource)
    {
        if (!str_starts_with($logSource, 'bot-v')) return true;
        $version = str_replace('bot-v', '', $logSource);
        return $version != self::VERSION;
    }
}
