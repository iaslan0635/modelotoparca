<?php

namespace App\Console\Commands;

use App\Models\Product;
use App\Services\Sperato;
use Illuminate\Console\Command;

class BotCommand extends Command
{
    protected $signature = 'bot';

    public function handle(): void
    {
        $ids = Product::query()->pluck("id");

        $this->withProgressBar($ids, $this->handleProduct(...));
    }

    public function handleProduct(int $productId)
    {
        $product = Product::findOrFail($productId);
        $search_predence = [
            'abk',
            'producercode',
            'producercode2',
            'cross_code',
            'oem_codes',
        ];

        foreach ($search_predence as $field) {
            $value = $product->getAttribute($field);
            if (strlen($value) === 0) continue;
            if ($field === "oem_codes") {
                foreach (explode(",", $value) as $oem) {
                    Sperato::smash($oem, $product->id);
                }
            } else {
                $found = Sperato::smash($value, $product->id);
                if ($found) break;
            }
        }
    }
}
