<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
use Livewire\Component;

class ProductFilters extends Component
{
    public ?EloquentCollection $categories;
    public Collection $brands;
    public Collection $properties;

    public ?int $selectedCategoryId = null;
    public Collection $selectedBrands;
    public Collection $propertyValues;

    public function mount(EloquentCollection $categories, $brands, $properties)
    {
        $this->categories = $categories;
        $this->brands = collect($brands);
        $this->properties = collect($properties);

        $this->selectedBrands = collect();
        $this->propertyValues = collect();
    }

    public function updated()
    {
        $filters = [
            "category" => $this->selectedCategoryId,
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
    }

    public function toggleSolePropertyValue($propertyId, $value)
    {
        if ($this->propertyValues->has($propertyId) && $this->propertyValues[$propertyId] === $value) {
            $this->propertyValues->forget($propertyId);
            return;
        }

        $this->propertyValues[$propertyId] = $value;
    }

    public function togglePropertyValue($propertyId, $value)
    {
        if (
            $this->propertyValues->has($propertyId) &&
            $this->propertyValues[$propertyId] instanceof Collection &&
            $this->propertyValues[$propertyId]->contains($value)
        ) {
            $this->propertyValues[$propertyId] = $this->propertyValues[$propertyId]->filter(fn($v) => $v !== $value);
            return;
        }

        if (!$this->propertyValues->has($propertyId) || !$this->propertyValues[$propertyId] instanceof Collection) {
            $this->propertyValues[$propertyId] = collect();
        }

        $this->propertyValues[$propertyId]->push($value);
    }

    public function resetPropertyValues($propertyId)
    {
        $this->propertyValues->forget($propertyId);
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
            return;
        }

        $this->selectedBrands[$brandId] = $brandName;
    }
}
