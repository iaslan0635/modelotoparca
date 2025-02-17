<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\Url;
use Livewire\Component;

class ProductFilters extends Component
{
    // Options
    #[Reactive] public Collection $categories;
    #[Reactive] public Collection $brands;
    #[Reactive] public ?Collection $properties;
    public int $priceRangeMin = 0;
    public int $priceRangeMax = 10000;

    // Filtered values
    public ?int $selectedCategoryId = null;
    public Collection $selectedBrands;
    public Collection $propertyValues;

    #[Url]
    public $category;

    public ?int $priceMin = null;
    public ?int $priceMax = null;

    public function __construct()
    {
        $this->selectedBrands = collect();
        $this->propertyValues = collect();
    }

    public function updated()
    {
        $filters = [
            "categoryId" => $this->selectedCategoryId,
            "brandIds" => $this->selectedBrands->toArray(),
            "propertyValues" => $this->propertyValues->toArray(),
            "priceMin" => $this->priceMin,
            "priceMax" => $this->priceMax,
        ];

        $this->category = $this->selectedCategoryId;

        $this->dispatch('filtered', filters: $filters);
    }

    public function render()
    {
        return view('livewire.product-filters');
    }

    public function resetSelectedBrands()
    {
        $this->selectedBrands = collect();
        $this->updated();
    }

    public function toggleSolePropertyValue($propertyId, $value)
    {
        if ($this->propertyValues->has($propertyId) && $this->propertyValues[$propertyId] === $value) {
            $this->propertyValues->forget($propertyId);
        } else {
            $this->propertyValues[$propertyId] = $value;
        }
        $this->updated();
    }

    public function togglePropertyValue($propertyId, $value)
    {
        if (
            $this->propertyValues->has($propertyId) &&
            $this->propertyValues[$propertyId] instanceof Collection &&
            $this->propertyValues[$propertyId]->contains($value)
        ) {
            $this->propertyValues[$propertyId] = $this->propertyValues[$propertyId]->filter(fn($v) => $v !== $value);
            $this->updated();
            return;
        }

        if (!$this->propertyValues->has($propertyId) || !$this->propertyValues[$propertyId] instanceof Collection) {
            $this->propertyValues[$propertyId] = collect();
        }

        $this->propertyValues[$propertyId]->push($value);
        $this->updated();
    }

    public function resetPropertyValues($propertyId)
    {
        $this->propertyValues->forget($propertyId);
        $this->updated();
    }

    public function isPropertyValueSelected($propertyId, $value)
    {
        return $this->propertyValues->has($propertyId) && (
            $this->propertyValues[$propertyId] === $value ||
            (
                $this->propertyValues[$propertyId] instanceof Collection &&
                $this->propertyValues[$propertyId]->contains($value)
            )
        );
    }

    public function getSelectedPropertyValues($propertyId)
    {
        return collect($this->propertyValues->get($propertyId));
    }

    public function toggleBrand($brandId)
    {
        $index = $this->selectedBrands->search($brandId);
        if ($index !== false) {
            $this->selectedBrands->forget($index);
        } else {
            $this->selectedBrands->push($brandId);
        }
        $this->updated();
    }

    public function resetPriceFilters()
    {
        $this->priceMin = null;
        $this->priceMax = null;
    }

    #[Computed]
    public function priceRepr()
    {
        $priceMin = $this->priceMin;
        $priceMax = $this->priceMax;

        if (!$priceMin && !$priceMax) {
            return '';
        }

        $repr = match (true) {
            $priceMin !== null && $priceMax !== null => $priceMin . " - " . $priceMax,
            $priceMin !== null => "En az " . $priceMin,
            $priceMax !== null => "En çok " . $priceMax,
            default => '?'
        };

        return ": $repr";
    }

    public static function normalizeCategories($categories): Collection
    {
        return collect($categories)
            ->map(function ($item) {
                /** @var Category $category */ // Elasticsearch returns nested array
                $category = $item instanceof Category ? $item : $item['category'];
                $count = $item instanceof Category ? $item->products_count : $item['count'];

                return [
                    'id' => $category->id,
                    'imageUrl' => $category->imageUrl(),
                    'name' => $category->name,
                    'count' => $count,
                    'parent_id' => $category->parent_id,
                    'subcategories' => $category->children->map(fn($child) => [
                        'id' => $child->id,
                        'name' => $child->name,
                        'imageUrl' => $child->imageUrl(),
                        'parent_id' => $child->parent_id,
                    ]),
                ];
            });
    }

    public static function normalizeBrands($brands): Collection
    {
        return collect($brands)->map(fn($item) => [
            "id" => $item["brand"]->id,
            "name" => $item["brand"]->name,
            "imageUrl" => $item["brand"]->imageUrl(),
            "count" => $item["count"],
        ]);
    }

    #[Computed]
    public function selectedCategoryName()
    {
        $category = $this->categories->firstWhere("id", $this->selectedCategoryId);
        return $category ? $category['name'] : Category::whereKey($this->selectedCategoryId)->value('name') ?? '?';
    }

    #[Computed]
    public function selectedBrandNames()
    {
        return $this->selectedBrands->map(
            fn($id) => $this->brands
                ->firstWhere('id', $id)['name']
                ?? Brand::whereKey($id)->value('name')
                ?? '?'
        );
    }
}
