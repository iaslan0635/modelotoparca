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
use Livewire\Component;

class CategoryPage extends Component
{
    public Category $category;

    public $parents;

    public $categoryTree;

    public $property = [];

    public $pageSize = 12;

    public $min_price;

    public $max_price;

    public $sortBy;

    public array $brandsArray = [];

    protected $queryString = [
        'min_price' => ['except' => ''],
        'max_price' => ['except' => ''],
        'sortBy' => ['except' => ''],
        'pageSize' => ['except' => '12'],
        'property' => ['except' => ''],
        'brandsArray' => ['except' => null, 'as' => 'brands'],
    ];

    public function mount(Category $category)
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

        $minPrice = $this->min_price ?? 0;
        $maxPrice = $this->max_price ?? 999999;

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

        $query->whereRelation('categories', fn (Builder $q) => $q->whereIn('id', $this->categoryTree['childs']));

        $brands = $query->get()->groupBy('brand_id');

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
                }]);
            },
        ]);
        $category->loadCount('products');

        $products = $query->paginate($this->pageSize);

        $propertyValues = PropertyValue::whereHas('product', fn (Builder $q) => $q->whereIn('id', $productIds))->with('property')->get();
        $allProperties = $propertyValues->map(fn (PropertyValue $pv) => $pv->property)->unique('id')->map(fn (Property $p) => [$p, $propertyValues->where('property.id', $p->id)]);

        return view('livewire.category-page', compact('category', 'products', 'brands', 'allProperties'));
    }

    public function deselectProperty($id)
    {
        unset($this->property[$id]);
    }
}
