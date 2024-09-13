<?php

namespace App\Livewire\Admin;

use App\Packages\Search\SynonymsManager;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Throwable;

class SearchReplacements extends Component
{
    use LivewireAlert;

    public array $draftSynonyms = [];

    public function render(SynonymsManager $synonymsManager)
    {
        dd($synonymsManager->getSynonyms());
        return view('livewire.admin.search-replacements');
    }

    public function create(SynonymsManager $synonymsManager)
    {
        try {
            $synonymsManager->createSynonym($this->draftSynonyms);
            $this->draftSynonyms = [];
            $this->alert('success', 'Başarıyla eklendi');
        } catch (Throwable $e) {
            report($e);
            $this->alert('error', 'Bir hata oluştu');
        }
    }

    public function delete(int $id, SynonymsManager $synonymsManager)
    {
        try {
            $synonymsManager->deleteSynonym($id);
            $this->alert('success', 'Başarıyla silindi');
        } catch (Throwable $e) {
            report($e);
            $this->alert('error', 'Bir hata oluştu');
        }
    }
}
