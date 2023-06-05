<?php

namespace App\Console\Commands;

use App\Bots\SparetoBot;
use Illuminate\Console\Command;

class LocalTestCommand extends Command
{
    protected $signature = 'ltest';

    public function handle()
    {
        (new SparetoBot("DF4225", "cross_code"))->handle();
    }
}
