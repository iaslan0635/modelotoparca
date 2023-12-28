<?php

namespace App\Http\Livewire;

use App\Models\BotProduct;
use Livewire\Component;

class SparetoConnectionBanPanel extends Component
{
    public BotProduct $url;

    public function render()
    {
        return view('livewire.spareto-connection-ban-panel');
    }

    public function ban()
    {
        $this->url->update(['is_banned' => true]);
    }

    public function unban()
    {
        $this->url->update(['is_banned' => false]);
    }
}
