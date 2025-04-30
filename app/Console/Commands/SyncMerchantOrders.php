<?php

namespace App\Console\Commands;

use App\Jobs\SyncOrdersJob;
use Illuminate\Console\Command;

class SyncMerchantOrders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sync-merchant-orders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        SyncOrdersJob::dispatch();
    }
}
