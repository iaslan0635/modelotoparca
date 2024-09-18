<?php

namespace App\Livewire\Admin;

use App\Packages\Search\SynonymsManager;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class SearchReplacements extends Component
{
    use LivewireAlert;

    public array $draftSynonyms = [];
    public ?string $editId = null;

    public function render(SynonymsManager $synonymsManager)
    {
        /** @var array{id: string, synonyms:string} $synonyms */
        $synonyms = $synonymsManager->getSynonyms();
        return view('livewire.admin.search-replacements', compact('synonyms'));
    }

    public function upsert(SynonymsManager $synonymsManager)
    {
        if (empty($this->draftSynonyms)) {
            $this->alert('error', 'Kelimeleri giriniz');
            return;
        }

        if ($this->editId) {
            $synonymsManager->updateSynonym($this->editId, $this->draftSynonyms);
            $this->editId = null;
            $this->alert('success', 'Başarıyla güncellendi');
        } else {
            $synonymsManager->createSynonym($this->draftSynonyms);
            $this->alert('success', 'Başarıyla eklendi');
        }

        $this->draftSynonyms = [];
    }

    public function delete(string $id, SynonymsManager $synonymsManager)
    {
        $synonymsManager->deleteSynonym($id);
        $this->alert('success', 'Başarıyla silindi');
    }

    public function edit(string $id, SynonymsManager $synonymsManager)
    {
        $this->editId = $id;
        $synonym = $synonymsManager->getSynonym($id);
        $this->draftSynonyms = collect(explode(',', $synonym))
            ->map(fn($s) => trim(str_replace('\\\\', '\\', $s)))
            ->all();
    }

    public function cancelEdit()
    {
        $this->editId = null;
        $this->draftSynonyms = [];
    }
}
