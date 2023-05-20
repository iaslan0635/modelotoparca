<?php

namespace App\Console\Commands;

use App\Models\ProductOem;
use App\Models\SparetoConnection;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SparetoConnectionResetJob extends Command
{
    protected $signature = 'spareto:connect:reset';

    public function handle()
    {
        SparetoConnection::where("is_connection_applied", true)->update(["is_connection_applied" => false]);
        ProductOem::truncate();
        DB::table("product_cars")->truncate();
    }
}
