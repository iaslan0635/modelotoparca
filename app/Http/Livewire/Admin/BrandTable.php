<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use Illuminate\Support\Collection;
use Livewire\Component;

class BrandTable extends Component
{
    public Collection $brands;

    public array|null $editingModel = null;

    public int|null $editingIndex = null;

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
        $this->editingModel = array_intersect_key($this->brands[$index], array_flip(self::EDITABLE_FIELDS));
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
