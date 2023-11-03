<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Services\Merchants\TrendyolMerchant;
use Livewire\Component;
use Livewire\WithPagination;

class SyncBrands extends Component
{
    use WithPagination;

    public array $trendyolBrands;

    public function mount()
    {
        $trendyol = new TrendyolMerchant();
        $this->trendyolBrands = $trendyol->getBrands();
    }

    public function render()
    {
        return view('livewire.admin.sync-brands', ["brands" => Brand::paginate(20)]);
    }
}
