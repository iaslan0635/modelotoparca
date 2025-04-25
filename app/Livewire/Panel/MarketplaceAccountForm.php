<?php

namespace App\Livewire\Panel;

use Livewire\Component;
use App\Models\Marketplace;
use App\Models\MarketplaceAccount;

class MarketplaceAccountForm extends Component
{
    public $marketplaces = [];
    public $marketplace_id;
    public $store_name;
    public $api_key;
    public $api_secret;
    public $supplier_id;

    public $editMode = false;
    public $accountId = null;

    protected $listeners = ['edit-account' => 'edit'];

    public bool $is_active = true;


    public function mount()
    {
        $this->marketplaces = Marketplace::all();
    }

    public function save()
    {
        $this->validate([
            'marketplace_id' => 'required|exists:marketplaces,id',
            'store_name' => 'required|string',
            'api_key' => 'required|string',
            'api_secret' => 'required|string',
            'supplier_id' => 'required|string',
        ]);

        $is_active = $this->is_active ? 1 : 0;

        $data = [
            'marketplace_id' => $this->marketplace_id,
            'store_name' => $this->store_name,
            'api_key' => $this->api_key,
            'api_secret' => $this->api_secret,
            'settings' => json_encode(['supplier_id' => $this->supplier_id]),
            'is_active' => $is_active,
        ];

        if ($this->editMode && $this->accountId) {
            MarketplaceAccount::where('id', $this->accountId)->update($data);
            session()->flash('success', 'Hesap güncellendi.');
        } else {
            MarketplaceAccount::create($data);
            session()->flash('success', 'Hesap başarıyla kaydedildi.');
        }

        $this->reset(['store_name', 'api_key', 'api_secret', 'supplier_id', 'marketplace_id', 'accountId', 'editMode', 'is_active']);
        $this->dispatch('accountUpdated'); // Listeyi yeniden yüklemek için event
    }


    public function edit($id)
    {
        $account = \App\Models\MarketplaceAccount::findOrFail($id);

        $this->accountId = $account->id;
        $this->marketplace_id = $account->marketplace_id;
        $this->store_name = $account->store_name;
        $this->api_key = $account->api_key;
        $this->api_secret = $account->api_secret;
        $this->supplier_id = json_decode($account->settings)->supplier_id ?? '';

        $this->editMode = true;
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
                session()->flash('error', "Bağlantı kurulamadı ❌ Gelen cevap: " . json_encode($response));
            }
        } catch (\Exception $e) {
            session()->flash('error', "API testi başarısız: " . $e->getMessage());
        }
    }


    public function render()
    {
        return view('livewire.panel.marketplace-account-form');
    }
}

