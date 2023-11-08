<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Services\Merchants\Hepsiburada;
use App\Services\Merchants\N11;
use App\Services\Merchants\TrendyolMerchant;
use Livewire\Component;
use Livewire\WithPagination;

class SyncCategories extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $n11 = new N11();
        $hepsiburada = new Hepsiburada();
        $trendyol = new TrendyolMerchant();

        return view('livewire.admin.sync-categories', [
            'categories' => Category::paginate(10),
            'n11Categories' => $n11->getCategories()->categoryList->category,
            'hepsiCategories' => $hepsiburada->getCategories()->data,
            'trendyolCategories' => $trendyol->getCategories()->categories
        ]);
    }
}
