<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\Bots\OnlineCarParts\Scraper;

class TestScraperCommand extends Command
{

    protected $signature = 'test:scraper {url}';
    protected $description = 'OnlineCarParts scraper test komutu';

    public function handle()
    {
        $url = $this->argument('url');
        $scraper = app(Scraper::class);

        try {
            $product = $scraper->getProductPage($url);

            $this->info('🔍 Ürün Bilgileri');
            $this->line('------------------------------');
            $this->line('Başlık: ' . $product->title);
            $this->line('Marka: ' . $product->brand);

// OEM Kodları özel yazdırma
            $oemList = collect($product->oems ?? [])->map(fn($item) => "{$item['brand']} - {$item['oem']}")->implode(', ');
            $this->line('OEM Kodları: ' . $oemList);

// Analog ürünler
            $analogs = is_array($product->analogProducts) ? implode(', ', $product->analogProducts) : '';
            $this->line('Muadil Ürünler (Analog): ' . $analogs);

// Tecdoc
            $tecdoc = is_array($product->tecdoc) ? implode(', ', $product->tecdoc) : '';
            $this->line('TecDoc Kodları: ' . $tecdoc);

        } catch (\Throwable $e) {
            $this->error('❌ Hata oluştu: ' . $e->getMessage());
        }
    }


    /**
     * The name and signature of the console command.
     *
     * @var string
     */
//    protected $signature = 'app:test-scraper-command';

    /**
     * The console command description.
     *
     * @var string
     */
//    protected $description = 'Command description';

    /**
     * Execute the console command.
     */

}
