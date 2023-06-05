<?php

namespace App\Console;

use App\Jobs\SparetoConnectJob;
use Cache;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            if (!DB::table("jobs")->where("queue", "spareto")->exists()) {
                SparetoConnectJob::connectAll();
                Cache::set("not_running_bot", true);
            }
        })->skip(fn() => Cache::has("not_running_bot") && Cache::get("not_running_bot"))
            ->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
