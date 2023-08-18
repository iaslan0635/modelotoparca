<?php

namespace App\Console\Commands;

use App\Jobs\SparetoConnectJob;
use Illuminate\Console\Command;

class SparetoConnectCommand extends Command
{
    protected $signature = 'spareto:connect {batch-id?}';

    public function handle()
    {
        SparetoConnectJob::connectAll($this->argument("batch-id"));
    }
}
