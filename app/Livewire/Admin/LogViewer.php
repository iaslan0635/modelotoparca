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
            return '#000000';
        }

        if (!isset($this->colors[$hash])) {
            return $this->colors[$hash] = $this->generateRandomPastelColor();
        }

        return $this->colors[$hash];
    }

    function generateRandomPastelColor() {
        // Generate random values for red, green, and blue between 127 and 255
        // This range ensures the colors are light and pastel-like
        $r = rand(127, 255);
        $g = rand(127, 255);
        $b = rand(127, 255);

        // Convert the RGB values to a hex string
        $color = sprintf("#%02X%02X%02X", $r, $g, $b);

        return $color;
    }
}
