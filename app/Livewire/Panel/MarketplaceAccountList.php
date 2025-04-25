<?php

namespace App\Livewire\Panel;

use Livewire\Component;
use App\Models\MarketplaceAccount;

class MarketplaceAccountList extends Component
{
    public $accounts;

    protected $listeners = ['accountUpdated' => '$refresh'];


    public function mount()
    {
        $this->accounts = MarketplaceAccount::with('marketplace')->latest()->get();
    }

    public function deleteAccount($id)
    {
        $account = MarketplaceAccount::findOrFail($id);
        $account->delete();

        session()->flash('success', 'Hesap silindi.');
    }

    public function testConnection($id)
    {
        $account = \App\Models\MarketplaceAccount::findOrFail($id);
        $settings = json_decode($account->settings ?? '{}');

        if (!isset($settings->supplier_id)) {
            session()->flash('error', 'Supplier ID eksik!');
            return;
        }

        try {
            $trendyol = new \App\Services\Marketplace\TrendyolService(
                $account->api_key,
                $account->api_secret,
                $settings->supplier_id
            );

            $response = $trendyol->getOrders();

            if (isset($response['content']) || isset($response['result'])) {
                session()->flash('success', "{$account->store_name} bağlantısı başarılı ✅");
            } else {
                session()->flash('error', "{$account->store_name} bağlantı kurulamadı ❌");
            }
        } catch (\Exception $e) {
            session()->flash('error', "API testi başarısız: " . $e->getMessage());
        }
    }



    public function render()
    {
        $accounts = MarketplaceAccount::with('marketplace')->latest()->get();
        return view('livewire.panel.marketplace-account-list', compact('accounts'));
    }

}
