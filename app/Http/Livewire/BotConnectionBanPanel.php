<?php

namespace App\Http\Livewire;

use App\Models\BotProduct;
use App\Models\Product;
use Livewire\Component;

class BotConnectionBanPanel extends Component
{
    public Product $product;
    public array $connections;

    public bool $isDirty = false;

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->connections = $product->bots->map(
            fn(BotProduct $botProduct) => [
                'connection' => $botProduct,
                'isBanned' => $botProduct->is_banned,
            ]
        )->toArray();
    }

    public function render()
    {
        return view('livewire.bot-connection-ban-panel', [
            'connections' => $this->connections,
        ]);
    }

    public function ban(int $i)
    {
        $this->connections[$i]['isBanned'] = true;
        $this->isDirty = true;
    }

    public function unban(int $i)
    {
        $this->connections[$i]['isBanned'] = false;
        $this->isDirty = true;
    }

    public function save()
    {
        foreach ($this->connections as $connection) {
            $connection['connection']->update([
                'is_banned' => $connection['isBanned'],
            ]);
        }

        $this->product->runBot();

        $this->isDirty = false;
    }
}
