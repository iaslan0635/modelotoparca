<?php

namespace App\Console\Commands;

use App\Bots\SparetoBot;
use App\Models\Product;
use Illuminate\Console\Command;

class RunSparetoBotCommand extends Command
{
    protected $signature = 'spareto:bot';

    public function handle(): void
    {
        $this->withProgressBar(Product::all(), fn(Product $product) => SparetoBot::dispatchAllFields($product));
    }
}
