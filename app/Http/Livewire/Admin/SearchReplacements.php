<?php

namespace App\Http\Livewire\Admin;

use App\Models\SearchReplacement;
use Livewire\Component;

class SearchReplacements extends Component
{
    public string $original = "";
    public string $replacement = "";
    public array $searchReplacements = [];

    public function mount()
    {
        $this->searchReplacements = SearchReplacement::all()->toArray();
    }

    public function render()
    {
        return view('livewire.admin.search-replacements');
    }

    public function add()
    {
        $this->searchReplacements[] = SearchReplacement::create([
            "original" => $this->original,
            "replacement" => $this->replacement
        ]);
    }

    public function delete(int $index)
    {
        ["id" => $id] = $this->searchReplacements[$index];
        SearchReplacement::whereId($id)->delete();
        unset($this->searchReplacements[$index]);
    }
}
