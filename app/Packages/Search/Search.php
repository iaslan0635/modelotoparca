<?php

namespace App\Packages\Search;

use App\Facades\Garage;
use App\Models\Brand;
use App\Models\Product;
use Elastic\ScoutDriverPlus\Builders\SearchParametersBuilder;
use Elastic\ScoutDriverPlus\Decorators\Hit;
use Elastic\ScoutDriverPlus\Support\Query;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

use function auth;

/** @TODO add synonyms for search replacements */
class Search
{
    /** Ordered by priority */
    const SEARCH_FIELDS = [
        'brand.name',

        'producercode',
        'producercode_unbranded',
        'part_number',
        'cross_code',
        'producercode2',
        'hidden_searchable',
        'tecdoc',

        'categories.name',

        'title',
        'sub_title',
        'description',

        'cars.name',
        'oems',
        'similars',
    ];

    /**
     * Türkçe karakterleri Latin karakterlere dönüştürür
     */
    private function convertTurkishToLatin($text)
    {
        $turkishChars = ['ı', 'ğ', 'ü', 'ş', 'ö', 'ç', 'İ', 'Ğ', 'Ü', 'Ş', 'Ö', 'Ç'];
        $latinChars = ['i', 'g', 'u', 's', 'o', 'c', 'I', 'G', 'U', 'S', 'O', 'C'];

        return str_replace($turkishChars, $latinChars, $text);
    }

    public function __construct(
        private readonly string $term,
        private readonly ?string $sortBy = null,
        private readonly ?string $sortDirection = null,
        private readonly ?int $categoryId = null,
        private readonly ?array $brandIds = null,
        private readonly ?array $loadRelations = null,
        private readonly ?int $minPrice = null,
        private readonly ?int $maxPrice = null,
    ) {}

    public function paginateProducts(int $perPage = 12)
    {
        $searchQuery = $this->getSearchQuery();
        $this->addHighlights($searchQuery);

        if ($this->sortBy !== null) {
            $searchQuery->sort($this->sortBy, $this->sortDirection ?? 'asc');
        }

        if ($this->loadRelations !== null) {
            $searchQuery->load($this->loadRelations);
        }

        return $searchQuery->paginate($perPage);
    }

    public function suggestions()
    {
        $suggestions = new Suggestions($this->term);

        return [
            'oems' => $suggestions->oem(),
            'cross_codes' => $suggestions->crossCode(),
            'producercodes' => $suggestions->producerCode(),
            'producercodes2' => $suggestions->producerCode2(),
        ];
    }

    public function brands()
    {
        $productsWithBrand = $this->getSearchQuery(ignoreBrandFilter: true)
            ->aggregate('unique_brands', ['terms' => ['field' => 'brand.id']])
            ->refineModels(fn(Builder $q) => $q->select(['id', 'brand_id']))
            ->load(['brand'])->size(100)->execute()->models();

        return $productsWithBrand
            ->map(fn(Product $product) => $product->brand)
            ->filter(fn(?Brand $brand) => $brand !== null)
            ->groupBy('id')
            ->map(fn(Collection $brandCollection) => [
                'brand' => $brandCollection[0],
                'count' => $brandCollection->count(),
            ]);
    }

    public function categories()
    {
        $productsWithCategories = $this->getSearchQuery()
            ->aggregate('unique_categories', ['terms' => ['field' => 'categories.id']])
            ->refineModels(fn(Builder $q) => $q->select(['id']))
            ->load(['categories'])->size(100)->execute()->models();

        return $productsWithCategories
            ->map(fn(Product $product) => $product->categories)->flatten()
            ->groupBy('name')
            ->map(fn(Collection $cats) => [
                'category' => $cats[0],
                'count' => $cats->count(),
            ]);
    }

    private function getSearchQuery(bool $ignoreBrandFilter = false)
    {
        $query = Query::bool();
        $query->filter($this->enabledFilter());
        $query->must($this->getBaseQuery());

        if (! $ignoreBrandFilter && filled($this->brandIds)) {
            $query->filter($this->brandFilter());
        }

        if ($this->categoryId !== null) {
            $query->filter($this->categoryFilter());
        }

        $carId = Garage::chosen();
        if ($carId !== null) {
            $query->filter($this->carFilter($carId));
        }

        if ($this->minPrice !== null || $this->maxPrice !== null) {
            $query->filter($this->priceFilter());
        }

        return Product::searchQuery($query);
    }

    private function getBaseQuery()
    {
        // Arama terimini kelimelere ayır
        $terms = preg_split('/\s+/', trim($this->term));

        // Geçerli terimleri filtrele (en az 2 karakter)
        $validTerms = array_values(array_filter($terms, function ($term) {
            return strlen($term) >= 2;
        }));

        // Eğer geçerli terim yoksa, orijinal terimi kullan
        if (empty($validTerms)) {
            $validTerms = [$this->term];
        }

        // Ana sorgu
        $query = Query::bool();

        // Tek kelime için basit sorgu
        if (count($validTerms) === 1) {
            return $this->buildSingleTermQuery($validTerms[0]);
        }

        // Her kelime için ayrı bir sorgu oluştur
        foreach ($validTerms as $term) {
            // Türkçe karakterleri Latin karakterlere dönüştür
            $latinTerm = $this->convertTurkishToLatin($term);

            // Bu kelime için tüm alanlarda arama yapacak bir sorgu
            $termQuery = Query::bool();

            // Tüm alanlarda ara
            foreach (self::SEARCH_FIELDS as $field) {
                // Kod alanları için özel işlem
                if (in_array($field, ['producercode', 'producercode_unbranded', 'part_number', 'cross_code', 'producercode2', 'hidden_searchable', 'tecdoc', 'oems', 'similars'])) {
                    // Kod alanları için term (tam eşleşme)
                    $termQuery->should(
                        Query::term()
                            ->field($field)
                            ->value($term)
                    );

                    // Latin karakterli versiyonu da ara
                    if ($term !== $latinTerm) {
                        $termQuery->should(
                            Query::term()
                                ->field($field)
                                ->value($latinTerm)
                        );
                    }

                    // Prefix sorgusu (başından itibaren eşleşme)
                    $termQuery->should(
                        Query::prefix()
                            ->field($field)
                            ->value($term)
                    );

                    // Latin karakterli versiyonu da ara
                    if ($term !== $latinTerm) {
                        $termQuery->should(
                            Query::prefix()
                                ->field($field)
                                ->value($latinTerm)
                        );
                    }
                }
                // cars.name için özel işlem
                elseif ($field === 'cars.name') {
                    // cars.name için match
                    $termQuery->should(
                        Query::match()
                            ->field($field)
                            ->query($term)
                    );

                    // Latin karakterli versiyonu da ara
                    if ($term !== $latinTerm) {
                        $termQuery->should(
                            Query::match()
                                ->field($field)
                                ->query($latinTerm)
                        );
                    }

                    // Wildcard sorgusu da ekle
                    $termQuery->should(
                        Query::wildcard()
                            ->field($field)
                            ->value('*' . strtolower($term) . '*')
                    );

                    // Latin karakterli versiyonu da ara
                    if ($term !== $latinTerm) {
                        $termQuery->should(
                            Query::wildcard()
                                ->field($field)
                                ->value('*' . strtolower($latinTerm) . '*')
                        );
                    }
                }
                // Metin alanları için işlem
                else {
                    // Metin alanları için match
                    $termQuery->should(
                        Query::match()
                            ->field($field)
                            ->query($term)
                    );

                    // Latin karakterli versiyonu da ara
                    if ($term !== $latinTerm) {
                        $termQuery->should(
                            Query::match()
                                ->field($field)
                                ->query($latinTerm)
                        );
                    }

                    // Wildcard sorgusu da ekle
                    $termQuery->should(
                        Query::wildcard()
                            ->field($field)
                            ->value('*' . strtolower($term) . '*')
                    );

                    // Latin karakterli versiyonu da ara
                    if ($term !== $latinTerm) {
                        $termQuery->should(
                            Query::wildcard()
                                ->field($field)
                                ->value('*' . strtolower($latinTerm) . '*')
                        );
                    }
                }
            }

            // Bu kelime için en az bir alanda eşleşme olmalı
            $termQuery->minimumShouldMatch(1);

            // Ana sorguya MUST olarak ekle - bu kelime mutlaka bir yerde geçmeli
            $query->must($termQuery);
        }

        return $query;
    }

    /**
     * Tek bir terim için sorgu oluşturur
     */
    private function buildSingleTermQuery($term)
    {
        // Türkçe karakterleri Latin karakterlere dönüştür
        $latinTerm = $this->convertTurkishToLatin($term);

        $query = Query::bool();

        // Tüm alanlarda ara
        foreach (self::SEARCH_FIELDS as $field) {
            if (in_array($field, ['title', 'sub_title', 'description'])) {
                // Metin alanları için match
                $query->should(
                    Query::match()
                        ->field($field)
                        ->query($term)
                );

                // Latin karakterli versiyonu da ara
                if ($term !== $latinTerm) {
                    $query->should(
                        Query::match()
                            ->field($field)
                            ->query($latinTerm)
                    );
                }

                // Wildcard sorgusu da ekle
                $query->should(
                    Query::wildcard()
                        ->field($field)
                        ->value('*' . strtolower($term) . '*')
                );

                // Latin karakterli versiyonu da ara
                if ($term !== $latinTerm) {
                    $query->should(
                        Query::wildcard()
                            ->field($field)
                            ->value('*' . strtolower($latinTerm) . '*')
                    );
                }
            } elseif ($field === 'cars.name') {
                // cars.name için özel sorgu
                $query->should(
                    Query::match()
                        ->field($field)
                        ->query($term)
                );

                // Latin karakterli versiyonu da ara
                if ($term !== $latinTerm) {
                    $query->should(
                        Query::match()
                            ->field($field)
                            ->query($latinTerm)
                    );
                }

                // Wildcard sorgusu da ekle
                $query->should(
                    Query::wildcard()
                        ->field($field)
                        ->value('*' . strtolower($term) . '*')
                );

                // Latin karakterli versiyonu da ara
                if ($term !== $latinTerm) {
                    $query->should(
                        Query::wildcard()
                            ->field($field)
                            ->value('*' . strtolower($latinTerm) . '*')
                    );
                }
            } elseif (in_array($field, ['producercode', 'producercode_unbranded', 'part_number', 'cross_code', 'producercode2', 'hidden_searchable', 'tecdoc', 'oems', 'similars'])) {
                // Kod alanları için term (tam eşleşme)
                $query->should(
                    Query::term()
                        ->field($field)
                        ->value($term)
                );

                // Latin karakterli versiyonu da ara
                if ($term !== $latinTerm) {
                    $query->should(
                        Query::term()
                            ->field($field)
                            ->value($latinTerm)
                    );
                }

                // Prefix sorgusu (başından itibaren eşleşme)
                $query->should(
                    Query::prefix()
                        ->field($field)
                        ->value($term)
                );

                // Latin karakterli versiyonu da ara
                if ($term !== $latinTerm) {
                    $query->should(
                        Query::prefix()
                            ->field($field)
                            ->value($latinTerm)
                    );
                }
            } else {
                // Diğer alanlar için (brand.name, categories.name)
                $query->should(
                    Query::match()
                        ->field($field)
                        ->query($term)
                );

                // Latin karakterli versiyonu da ara
                if ($term !== $latinTerm) {
                    $query->should(
                        Query::match()
                            ->field($field)
                            ->query($latinTerm)
                    );
                }

                // Wildcard sorgusu da ekle
                $query->should(
                    Query::wildcard()
                        ->field($field)
                        ->value('*' . strtolower($term) . '*')
                );

                // Latin karakterli versiyonu da ara
                if ($term !== $latinTerm) {
                    $query->should(
                        Query::wildcard()
                            ->field($field)
                            ->value('*' . strtolower($latinTerm) . '*')
                    );
                }
            }
        }

        // En az bir should eşleşmesi olmalı
        $query->minimumShouldMatch(1);

        return $query;
    }

    private function enabledFilter()
    {
        return Query::term()
            ->field('status')
            ->value(true);
    }

    private function brandFilter()
    {
        return Query::terms()
            ->field('brand.id')
            ->values($this->brandIds);
    }

    private function categoryFilter()
    {
        return Query::term()
            ->field('categories.id')
            ->value($this->categoryId);
    }

    private function carFilter(int $carId)
    {
        return Query::term()
            ->field('cars.id')
            ->value($carId);
    }

    private function priceFilter()
    {
        $query = Query::range();
        if ($this->minPrice !== null) {
            $query->gte($this->minPrice);
        }
        if ($this->maxPrice !== null) {
            $query->lte($this->maxPrice);
        }

        return $query;
    }

    private function addHighlights(SearchParametersBuilder $searchParameters)
    {
        $searchParameters
            ->highlight('*');
    }

    public static function parseHighlights(LengthAwarePaginator $productPaginator)
    {
        return $productPaginator->getCollection()
            ->filter(fn(Hit $hit) => $hit->highlight() !== null)
            ->mapWithKeys(fn(Hit $hit) => [$hit->document()->id() => $hit->highlight()->raw()]);
    }

    public function saveSearch()
    {
        \App\Models\Search::create([
            'query' => $this->term,
            'user_id' => auth()->id(),
        ]);
    }
}
