<?php

namespace App\Console\Commands;

use App\Models\SparetoConnection;
use Illuminate\Console\Command;

class SparetoConnectionResetJob extends Command
{
    protected $signature = 'spareto:connect:reset';

    public function handle()
    {
        SparetoConnection::where("is_connection_applied", true)->update(["is_connection_applied" => false]);
    }
}
