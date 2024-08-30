<?php

namespace App\Livewire\Admin;

use App\Models\Log;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class LogViewer extends Component
{
    public int $productId;

    public Collection $logs;

    public array $colors = [];

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
        $this->logs = Log::where('product_id', $this->productId)->orderByDesc('created_at')->get();
    }

    public function getColor(?string $hash)
    {
        if (!$hash) {
            return null;
        }

        if (!isset($this->colors[$hash])) {
            return $this->colors[$hash] = $this->generateRandomPastelColor();
        }

        return $this->colors[$hash];
    }

    private function generateRandomPastelColor() {
        $hue = mt_rand(0, 35);

        return "hsl({$hue}0deg, 100%, 80%)";
    }
}
