<?php

namespace App\Jobs;

use App\Bots\SparetoBot;
use App\Facades\SparetoCache;
use App\Facades\SparetoConnector;
use App\Models\Product;
use App\Models\ProductCar;
use App\Models\ProductOem;
use App\Models\SparetoConnection;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SparetoConnectJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public int $productId)
    {
    }

    private function query()
    {
        return SparetoConnection::where("product_id", $this->productId);
    }

    private function unapplied()
    {
        return $this->query()->where("is_connection_applied", false);
    }

    public function handle(): void
    {
        $hasConnectionsOtherThanOem = $this->query()->where("connected_by", "!=", "oem")->exists();

        $filteredConnections = !$hasConnectionsOtherThanOem ? $this->unapplied()->get() :
            $this->unapplied()->where("connected_by", "!=", "oem")->get();

        foreach ($filteredConnections as $connection)
            self::connect($connection);
    }

    public static function connect(SparetoConnection $connection)
    {
        SparetoConnector::connect($connection);
    }

    public static function connectAll()
    {
        foreach (Product::all("id") as $product) {
            self::dispatch($product->id);
        }
    }
}
