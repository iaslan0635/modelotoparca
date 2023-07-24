<?php

namespace App\Http\Livewire\Admin;

use App\Models\SearchReplacement;
use Illuminate\Database\QueryException;
use Livewire\Component;

class SearchReplacements extends Component
{
    public string $original = "";
    public string $replacement = "";
    public array $searchReplacements = [];

    public function mount()
    {
        $this->searchReplacements = SearchReplacement::orderBy("id", "desc")->all()->toArray();
    }

    public function render()
    {
        return view('livewire.admin.search-replacements');
    }

    public function add()
    {
        try {
            $this->searchReplacements[] = SearchReplacement::create([
                "original" => $this->original,
                "replacement" => $this->replacement
            ]);
            SearchReplacement::clearCache();
        } catch (QueryException $e) {
            $this->emit("toast", "Önceden bu kayıt oluşturulmuş", "error");
        }
    }

    public function delete(int $index)
    {
        ["id" => $id] = $this->searchReplacements[$index];
        SearchReplacement::whereId($id)->delete();
        SearchReplacement::clearCache();
        unset($this->searchReplacements[$index]);
    }
}
