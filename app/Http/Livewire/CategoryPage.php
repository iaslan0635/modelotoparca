<?php

namespace App\Http\Livewire;

use App\Facades\CategoryFacade;
use App\Facades\Garage;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Livewire\Component;

class CategoryPage extends Component
{
    public Category $category;
    public $parents, $categoryTree;
    public $property = [];

    public $min_price, $max_price, $sortBy, $brandsArray;
    protected $queryString = [
        'min_price' => ['except' => ''],
        'max_price' => ['except' => ''],
        'sortBy' => ['except' => ''],
        'property' => ['except' => ''],
        'brandsArray' => ['except' => '', 'as' => 'brands'],
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
//        return "<h1 wire:click='changeProperty(1,2)'>A</h1>";
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
                $builder->where('property_id', $key)->whereIn('value', $values);
            });
        }

        $query->whereRelation('categories', fn(Builder $q) => $q->whereIn('id', $this->categoryTree['childs']));

        $brands = $query->get()->groupBy('brand_id');

        if (filled($this->brandsArray)) {
            $query->whereIn('brand_id', $this->brandsArray);
        }

        $pids = $query->get()->map(function ($item) {
            return $item->id;
        });

        $category->load([
            'children' => function (HasMany $b) use ($pids) {
                $b->whereHas('products', function ($q) use ($pids) {
                    $q->whereIn('id', $pids);
                })->withCount(['products' => function ($query) use ($pids) {
                    $query->whereIn('id', $pids);
                }]);
            },
        ]);
        $category->loadCount('products');

        $products = $query->paginate(12);

        return view('livewire.category-page', compact('category', 'products', 'brands'));
    }

    public function changeProperty($id, $value)
    {
        $this->property[$id] = [$value];
    }
}
