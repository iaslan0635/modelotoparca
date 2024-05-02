<?php

namespace App\Services\Bots;

use App\Models\BotProduct;
use App\Models\Log;
use App\Models\Ocp;
use Spatie\Url\Url;
use Symfony\Component\DomCrawler\Crawler;

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
        $this->data = app(OnlineCarParts\DataProvider::class);
    }

    public static function getVehicleIds(string|int $ocpProductId, array $makerIds): array
    {
        $vehicleIds = [];
        foreach ($makerIds as $makerId) {
            $crawler = new Crawler(OcpClient::request("https://www.onlinecarparts.co.uk/ajax/product/related-auto?productId=$ocpProductId&makerId=$makerId"));
            $modelIds = $crawler->filter('[data-model-id]')->each(fn(Crawler $el) => $el->attr('data-model-id'));
            foreach ($modelIds as $modelId) {
                $vehicles = json_decode(OcpClient::request("https://www.onlinecarparts.co.uk/ajax/product/related/vehicles?articleId=$ocpProductId&makerId=$makerId&modelId=$modelId"))->vehicles;
                array_push($vehicleIds, ...collect($vehicles)->pluck('id'));
            }
        }

        return $vehicleIds;
    }

    public static function findBrandIdFromSearchPage(string $searchPageUrl, string $brand): ?string
    {
        $commonizedBrand = self::commonizeString($brand);
        $crawler = new Crawler(OcpClient::request($searchPageUrl));
        $foundBrandEls = $crawler->filter('.brand-slider__item')
            ->reduce(fn(Crawler $el) => self::commonizeString($el->filter('img')->attr('alt')) === $commonizedBrand);
        if ($foundBrandEls->count() < 1) {
            return null;
        }

        return $foundBrandEls->eq(0)->filter('input')->attr('value');
    }

    public function smash(): bool
    {
        if ($this->scrape()) return true;
        if ($this->regexed) return false;

        $regexedBot = new OnlineCarParts(
            keyword: self::commonizeString($this->keyword),
            product_id: $this->product_id,
            field: $this->field,
            brand_filter: $this->brand_filter,
            regexed: true,
        );

        return $regexedBot->scrape();
    }

    public function scrape(): bool
    {
        $successfulProductCount = 0;

        $isOemSearch = $this->field === 'oem_codes';
        $searchPage = $this->data->getSearchPage($this->keyword, $isOemSearch);
        for ($pageNumber = 1; $pageNumber <= $searchPage->pageCount; $pageNumber++) {
            $links = $this->getProductLinksForPage($searchPage, $pageNumber);

            foreach ($links as $link) {
                if (self::scrapeProductPage($link)) {
                    $successfulProductCount++;
                }
            }

            $count = count($links);
            if ($this->field !== 'oem_codes' && $count !== 0) {
                $this->log("$count adet ürün bulunduğu için arama $pageNumber. sayfada sonlandırıldı.");
                break;
            }
        }

        $this->log("$successfulProductCount Adet ürün çekildi.");

        return $successfulProductCount > 0;
    }

    public function getProductLinksForPage(Ocp\SearchPage $searchPage, int $pageNumber)
    {
        $matchArticleNo = $this->field === 'producercode' || $this->field === 'producercode2' || $this->field === 'cross_code' || $this->field === 'abk';
        $articleNo = $matchArticleNo ? $this->keyword : null;

        $url = (string)Url::fromString($searchPage->url)->withQueryParameter('page', $pageNumber);
        $productLinks = $this->data->getSearchPageProductLinks($url, $articleNo);

        $this->log("$pageNumber. Sayfadan " . count($productLinks) . ' adet ürün bulundu.');
        return $productLinks;
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

    public function scrapeProductPage(string $url): bool
    {
        $connection = BotProduct::firstOrNew(
            ['product_id' => $this->product_id, 'url' => $url],
            ['origin_field' => $this->field, 'keyword' => $this->keyword]
        );
        if ($connection->is_banned) return false;

        $productPage = $this->data->getProductPage($url);
        $productPage->saveToBigData();
        $productPage->saveToDatabase($this->product_id);

        return true;
    }

    public static function commonizeString(string $string): string
    {
        return strtolower(preg_replace('/[^a-zA-Z0-9]+/', '', $string));
    }
}
