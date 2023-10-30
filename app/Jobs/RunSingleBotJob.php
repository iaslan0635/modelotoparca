<?php

namespace App\Jobs;

use App\Jobs\Import\ExcelImport;
use App\Models\TigerProduct;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class RunSingleBotJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public TigerProduct $product)
    {
    }

    public function handle(): void
    {
        ExcelImport::clearSparetoAssociations($this->product);
        ExcelImport::runBot($this->product);
    }
}
