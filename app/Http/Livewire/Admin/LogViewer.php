<?php

namespace App\Http\Livewire\Admin;

use App\Models\Log;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class LogViewer extends Component
{
    public int $productId;
    public Collection $logs;

    public function mount(int $productId)
    {
        $this->productId = $productId;
        $this->refresh();
    }

    public function render()
    {
        return view('livewire.admin.log-viewer');
    }

    public function refresh()
    {
        $this->logs = Log::where("product_id", $this->productId)->orderByDesc('created_at')->get();
    }
}
