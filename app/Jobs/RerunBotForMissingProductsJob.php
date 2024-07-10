<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class RerunBotForMissingProductsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
    }

    public function handle(): void
    {
        Product::whereDoesntHave("cars")->with("tiger")->chunk(100, function ($products) {
            foreach ($products as $product) {
                dispatch(new RunSingleBotJob($product->tiger));
            }
        });
    }
}
