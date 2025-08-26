<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Services\Bots\OnlineCarParts\Scraper;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('ocp:test-product {url}', function (string $url) {
    $scraper = app(Scraper::class);

    try {
        $pp = $scraper->getProductPage($url);

        $this->info('✅ Ürün sayfası parse edildi');
        $this->line('Title      : ' . $pp->title);
        $this->line('Brand      : ' . $pp->brand);
        $this->line('ArticleId  : ' . $pp->articleId);
        $this->line('OEM sayısı : ' . count($pp->oems));
        $this->line('Specs      : ' . count($pp->specs));
        $this->line('Vehicles   : ' . count($pp->vehicles));
        $this->line('Images     : ' . count($pp->images));
    } catch (\Throwable $e) {
        $this->error('❌ HATA: '.$e->getMessage());
    }
})->describe('Tek bir OnlineCarParts ürün URL’sini parse edip sonucu gösterir');
