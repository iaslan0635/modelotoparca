<?php

namespace App\Console\Commands;

use App\Jobs\SparetoConnectJob;
use App\Models\Product;
use Illuminate\Console\Command;

class SparetoConnectCommand extends Command
{
    protected $signature = 'spareto:connect';

    public function handle()
    {
        SparetoConnectJob::connectAll(null);
    }
}
