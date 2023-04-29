<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

    public static function temp()
    {
        foreach(\App\Models\Product::all(["id", "similar_product_codes"]) as $product) {
            if ($product->similar_product_codes === null) continue;
            $codes = explode(",", $product->similar_product_codes);
            $codes2 = collect($codes)->map(fn ($s) => trim($s))->filter();
            foreach ($codes2 as $code) {
                \DB::table("product_similars")->insertOrIgnore([
                    "product_id" => $product->id,
                    "code" => $code
                ]);
            }
        }
    }
}
