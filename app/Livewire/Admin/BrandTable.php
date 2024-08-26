<?php

namespace App\Livewire\Admin;

use App\Models\Brand;
use Illuminate\Support\Collection;
use Livewire\Component;

/** @deprecated */
class BrandTable extends Component
{
    /** @var Collection<array-key, Brand> */
    public Collection $brands;

    public ?array $editingModel = null;

    public ?int $editingIndex = null;

    const EDITABLE_FIELDS = [
        'id',
        'name',
        'slug',
        'botname',
    ];

    public function render()
    {
        return view('livewire.admin.brand-table');
    }

    public function enterEditing($index)
    {
        $this->editingModel = $this->brands[$index]->only(self::EDITABLE_FIELDS);
        $this->editingIndex = $index;
    }

    public function exitEditing()
    {
        ['id' => $id] = $this->editingModel;
        unset($this->editingModel['id']);

        $brand = Brand::find($id);
        $brand->update($this->editingModel);

        $this->brands[$this->editingIndex] = $brand;
        $this->editingIndex = null;
        $this->editingModel = null;
    }
}
