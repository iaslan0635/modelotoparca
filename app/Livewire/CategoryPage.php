<?php

namespace App\Livewire;

use App\Facades\CategoryFacade;
use App\Facades\Garage;
use App\Models\Category;
use App\Models\Product;
use App\Models\Property;
use App\Models\PropertyValue;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Arr;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use App\Models\Brand;

class CategoryPage extends Component
{
    public Category $category;

    public $parents;

    public $categoryTree;

    #[Url]
    public $property = [];

    #[Url(except: 12)]
    public $pageSize = 12;

    #[Url(except: '')]
    public $min_price;

    #[Url(except: '')]
    public $max_price;

    #[Url]
    public $selectedFittingPositions = [];

    #[Url]
    public $sortBy;

    #[Url(as: 'brands')]
    public array $brandsArray = [];

    public $filters;

    public Category $defaultCategory;

    public function mount(Category $category)
    {
        $this->defaultCategory = $category;
        $this->loadCategory($category);
    }

    private function loadCategory(Category $category)
    {
        $this->category = $category;
        $category->load('properties');

        $tree = CategoryFacade::getTree($category->id);
        $this->categoryTree = $tree;
        $this->parents = Category::query()->with('products')->whereIn('id', $this->categoryTree['parents'])->get();
    }

    public function render()
    {
        $category = $this->category;

        $minPrice = $this->min_price ?: 0;
        $maxPrice = $this->max_price ?: 999999;

        $query = Product::query()
            ->with(['categories', 'price', 'brand'])
            ->join('prices', 'products.id', '=', 'prices.product_id')
            ->whereBetween('prices.price', [$minPrice, $maxPrice])->select('products.*')
            ->distinct();

        if (Garage::hasChosen()) {
            $query->whereRelation('cars', 'id', '=', Garage::chosen());
        }

        if (filled($this->sortBy) && $this->sortBy === 'price-asc') {
            $query->orderBy('prices.price', 'asc');
        } elseif (filled($this->sortBy) && $this->sortBy === 'price-desc') {
            $query->orderBy('prices.price', 'desc');
        } elseif (filled($this->sortBy) && $this->sortBy === 'title-asc') {
            $query->orderBy('products.title', 'asc');
        } elseif (filled($this->sortBy) && $this->sortBy === 'title-desc') {
            $query->orderBy('products.title', 'desc');
        }

        foreach ($this->property ?? [] as $key => $values) {
            $query->whereHas('propertyValues', function (Builder $builder) use ($values, $key) {
                $builder->where('property_id', $key)->whereIn('value', Arr::wrap($values));
            });
        }

        $query->whereRelation('categories', fn(Builder $q) => $q->whereIn('id', $this->categoryTree['childs']));

        $brands = $query->get()->groupBy('brand_id')
            ->map(fn($products) => [
                'brand' => $products->first()->brand,
                'count' => $products->count(),
            ])
            ->filter(fn($item) => $item['brand'] && $item['count'] > 0)
            ->sortBy('brand.name');

        if (filled($this->brandsArray)) {
            $query->whereIn('brand_id', $this->brandsArray);
        }

        $productIds = $query->pluck('id');

        $category->load([
            'children' => function (HasMany $b) use ($productIds) {
                $b->whereHas('products', function ($q) use ($productIds) {
                    $q->whereIn('id', $productIds);
                })->withCount(['products' => function ($query) use ($productIds) {
                    $query->whereIn('id', $productIds);
                }])
                    ->having('products_count', '>', 0);
            },
        ]);
        $category->loadCount('products');

        $products = $query->paginate($this->pageSize);

        $propertyValues = PropertyValue::whereHas('product', fn(Builder $q) => $q->whereIn('id', $productIds))->with('property')->get();
        $allProperties = $propertyValues->map(fn(PropertyValue $pv) => $pv->property)->unique('id')->map(fn(Property $p) => [$p, $propertyValues->where('property.id', $p->id)]);
        $filterCategories = ProductFilters::normalizeCategories($category->children->unique('name')->sortBy('name'));
        $filterFittingPositions = ProductFilters::normalizeFittingPositions($products->groupBy('fitting_position'));
        dd($filterFittingPositions);

        return view('livewire.category-page', compact('category', 'products', 'brands', 'allProperties', 'filterCategories'));
    }

    public function deselectProperty($id)
    {
        unset($this->property[$id]);
    }

    #[On('filtered')]
    public function onFiltered($filters)
    {
        [
            "categoryId" => $categoryId,
            "brandIds" => $this->brandsArray,
            "propertyValues" => $this->property,
            "priceMin" => $this->min_price,
            "priceMax" => $this->max_price,
            "fittingPositions" => $this->selectedFittingPositions,
        ] = $filters;

        if ($categoryId !== $this->category->id) {
            $category = $categoryId === null ? $this->defaultCategory : Category::find($categoryId);
            $this->loadCategory($category);
        }
    }

    protected function getAggregations()
    {
        $query = Product::search('*')
            ->when($this->filters['categoryId'], function ($query, $categoryId) {
                $query->where('category_id', $categoryId);
            })
            ->when($this->filters['brandIds'], function ($query, $brandIds) {
                $query->whereIn('brand_id', $brandIds);
            })
            ->when($this->filters['priceMin'], function ($query, $priceMin) {
                $query->where('price', '>=', $priceMin);
            })
            ->when($this->filters['priceMax'], function ($query, $priceMax) {
                $query->where('price', '<=', $priceMax);
            })
            ->when($this->filters['fittingPositions'], function ($query, $positions) {
                $query->whereIn('fitting_position', $positions);
            });

        $aggregations = $query->raw(function ($elasticsearch) {
            return [
                'aggs' => [
                    'categories' => [
                        'terms' => ['field' => 'category_id'],
                    ],
                    'brands' => [
                        'terms' => ['field' => 'brand_id'],
                    ],
                    'fitting_positions' => [
                        'terms' => ['field' => 'fitting_position'],
                    ],
                ],
            ];
        });

        $categories = collect($aggregations['aggregations']['categories']['buckets'])
            ->map(function ($bucket) {
                $category = Category::find($bucket['key']);
                return [
                    'category' => $category,
                    'count' => $bucket['doc_count'],
                ];
            });

        $brands = collect($aggregations['aggregations']['brands']['buckets'])
            ->map(function ($bucket) {
                $brand = Brand::find($bucket['key']);
                return [
                    'brand' => $brand,
                    'count' => $bucket['doc_count'],
                ];
            });

        $fittingPositions = collect($aggregations['aggregations']['fitting_positions']['buckets'])
            ->map(function ($bucket) {
                return [
                    'position' => $bucket['key'],
                    'count' => $bucket['doc_count'],
                ];
            });

        return [
            'categories' => ProductFilters::normalizeCategories($categories),
            'brands' => ProductFilters::normalizeBrands($brands),
            'fittingPositions' => ProductFilters::normalizeFittingPositions($fittingPositions),
        ];
    }
}
