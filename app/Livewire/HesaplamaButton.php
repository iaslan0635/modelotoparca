<?php

namespace App\Livewire;

use App\Models\CalculateTool as CalculateToolModel;
use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class HesaplamaButton extends Component
{
    public Product $product;
    public $newListName;

    public function render()
    {
        return view('livewire.hesaplama-button');
    }

    public function toggleList($list, $toggle)
    {
        $exists = $this->existsInList($list);

        if ($toggle == $exists) { // Intent is same as current state
            return;
        }

        if ($exists) {
            CalculateToolModel::forUser()->list($list)->where('product_id', $this->product->id)->delete();
        } else {
            $data = [
                'session_id' => \Session::getId(),
                'product_id' => $this->product->id,
                'list_name' => $list,
            ];

            if (auth()->check()) {
                $data['user_id'] = auth()->id();
            }

            CalculateToolModel::create($data);
        }
    }

    public function addToNewList()
    {
        $listName = $this->newListName;
        $isNew = !$this->lists->contains($listName);
        $this->newListName = "";

        $this->toggleList($listName, true);
        if ($isNew) {
            $this->dispatch("listAdded", list: $listName);
        }
    }

    #[On('listAdded')]
    public function onListAdded($list)
    {
        // Placeholder event listener for rerendering the component
    }

    public function exists(): bool
    {
        return CalculateToolModel::forUser()->where('product_id', $this->product->id)->exists();
    }

    #[Computed]
    public function lists()
    {
        $lists = CalculateToolModel::getListNames();
        return $lists->filter()->prepend(null);
    }

    public function existsInList($list)
    {
        return CalculateToolModel::forUser()->list($list)->where('product_id', $this->product->id)->exists();
    }
}
