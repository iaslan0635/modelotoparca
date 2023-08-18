<?php

namespace App\Jobs;

use App\Facades\SparetoConnector;
use App\Models\Product;
use App\Models\SparetoConnection;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SparetoConnectJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $queue = "spareto_connect";

    public function __construct(
        public readonly int    $productId,
        public readonly string|null $batchId)
    {
    }

    private function query()
    {
        $query = SparetoConnection::where("product_id", $this->productId);
        if ($this->batchId !== null)
            $query->where("batch_id", $this->batchId);
        return $query;
    }

    private function unapplied()
    {
        return $this->query()->where("is_connection_applied", false);
    }

    public function handle(): void
    {
        $hasConnectionsOtherThanOem = $this->query()->where("connected_by", "!=", "oem")->exists();

        $filteredConnections = $hasConnectionsOtherThanOem
            ? $this->unapplied()->where("connected_by", "!=", "oem")->get()
            : $this->unapplied()->get();

        foreach ($filteredConnections as $connection)
            SparetoConnector::connect($connection);
    }

    public static function connectAll(string|null $batchId)
    {
        $query = Product::query();
        if ($batchId !== null) $query->where("batch_id", $batchId);
        foreach ($query->pluck("id") as $productId) {
            dispatch(new SparetoConnectJob($productId, $batchId));
        }
    }
}
