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
        // Basit ve temel bir sorgu yapısı
        $query = Query::bool();

        // Metin alanları için
        $textFields = ['title', 'sub_title', 'description', 'cars.name'];

        // Kod alanları
        $codeFields = array_diff(self::SEARCH_FIELDS, $textFields);

        // Arama terimini kelimelere ayır
        $terms = preg_split('/\s+/', trim($this->term));

        // Geçerli terimleri filtrele (en az 2 karakter)
        $validTerms = array_filter($terms, function ($term) {
            return strlen($term) >= 2;
        });

        // Eğer geçerli terim yoksa, orijinal terimi kullan
        if (empty($validTerms)) {
            $this->addSingleTermQueries($query, $textFields, $codeFields, $this->term);
            return $query;
        }

        // Eğer tek kelime varsa normal arama yap
        if (count($validTerms) === 1) {
            $this->addSingleTermQueries($query, $textFields, $codeFields, $validTerms[0]);
            return $query;
        }

        // Birden fazla kelime varsa
        // Her kelime için bir sorgu oluştur
        foreach ($validTerms as $term) {
            $termQuery = Query::bool();

            // Tüm alanlarda ara
            foreach (array_merge($textFields, $codeFields) as $field) {
                // Tam eşleşme
                if (in_array($field, $textFields)) {
                    $termQuery->should(
                        Query::match()
                            ->field($field)
                            ->query($term)
                    );
                } else {
                    $termQuery->should(
                        Query::term()
                            ->field($field)
                            ->value($term)
                    );
                }

                // Prefix eşleşme
                $termQuery->should(
                    Query::prefix()
                        ->field($field)
                        ->value($term)
                );
            }

            // Her kelime için en az bir eşleşme olmalı
            $termQuery->minimumShouldMatch(1);

            // Ana sorguya ekle (must ile her kelime için eşleşme olmalı)
            $query->must($termQuery);
        }

        return $query;
    }

    /**
     * Tek bir terim için sorguları ekler
     */
    private function addSingleTermQueries($query, $textFields, $codeFields, $term)
    {
        // Metin alanları için match sorgusu
        foreach ($textFields as $field) {
            // Tam eşleşme
            $query->should(
                Query::match()
                    ->field($field)
                    ->query($term)
            );

            // Prefix eşleşme
            if (strlen($term) >= 2) { // En az 2 karakter için prefix araması
                $query->should(
                    Query::prefix()
                        ->field($field)
                        ->value($term)
                );
            }
        }

        // Kod alanları için
        foreach ($codeFields as $field) {
            // Tam eşleşme
            $query->should(
                Query::term()
                    ->field($field)
                    ->value($term)
            );

            // Prefix eşleşme
            $query->should(
                Query::prefix()
                    ->field($field)
                    ->value($term)
            );
        }
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
