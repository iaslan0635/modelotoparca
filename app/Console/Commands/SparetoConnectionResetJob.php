<?php

namespace App\Console\Commands;

use App\Models\ProductCar;
use App\Models\ProductOem;
use App\Models\SparetoConnection;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SparetoConnectionResetJob extends Command
{
    protected $signature = 'spareto:connect:reset';

    public function handle()
    {
        DB::transaction(function () {
            SparetoConnection::where("is_connection_applied", true)->update(["is_connection_applied" => false]);
            ProductOem::whereNotNull("connection_id")->delete();
            ProductCar::truncate();
        });
    }
}
