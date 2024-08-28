<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Support\Collection;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class ProductFilters extends Component
{
    /** @var Collection */
    public $categories;
    /** @var Collection */
    public $brands;
    /** @var Collection */
    public $properties;

    /** @var ?int */
    public $selectedCategoryId = null;
    /** @var Collection */
    public $selectedBrands;
    /** @var Collection */
    public $propertyValues;

    public function mount(
        $categories = null,
        $brands = null,
        $properties = null,

        $selectedCategoryId = null,
        $selectedBrands = null,
        $propertyValues = null
    )
    {
        $this->categories = collect($categories)
            ->map(function ($item) {
                /** @var Category $category */ // Elasticsearch returns nested array
                $category = $item instanceof Category ? $item : $item['category'];
                $count = $item instanceof Category ? $item->products_count : $item['count'];

                return [
                    'id' => $category->id,
                    'imageUrl' => $category->imageUrl(),
                    'name' => $category->name,
                    'count' => $count,
                ];
            });

        $this->brands = collect($brands);
        $this->properties = collect($properties);

        $this->selectedCategoryId = $selectedCategoryId instanceof Category ? $selectedCategoryId->id : $selectedCategoryId;
        $this->selectedBrands = collect($selectedBrands);
        $this->propertyValues = collect($propertyValues);

        // Add selected category to categories list if it's not there
        if ($this->categories->where('id', $selectedCategoryId)->isEmpty()) {
            $category = $selectedCategoryId instanceof Category ? $selectedCategoryId : Category::find($selectedCategoryId);
            if ($category) {
                $this->categories->push([
                    'id' => $category->id,
                    'imageUrl' => $category->imageUrl(),
                    'name' => $category->name,
                    'count' => 0,
                ]);
            }
        }
    }

    public function updated()
    {
        $filters = [
            "categoryId" => $this->selectedCategoryId,
            "brandIds" => $this->selectedBrands->keys()->toArray(),
            "propertyValues" => $this->propertyValues->toArray(),
        ];

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

    public function toggleBrand($brandId, $brandName)
    {
        if ($this->selectedBrands->has($brandId)) {
            $this->selectedBrands->forget($brandId);
        } else {
            $this->selectedBrands[$brandId] = $brandName;
        }
        $this->updated();
    }
}
