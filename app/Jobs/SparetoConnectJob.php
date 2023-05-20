<?php

namespace App\Jobs;

use App\Bots\SparetoBot;
use App\Facades\SparetoCache;
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
            $this->connect($connection);
    }

    private function connect(SparetoConnection $connection)
    {
        $targetRef = $connection->product_id;
        $crawler = SparetoCache::crawler($connection->url);

        $cars = SparetoBot::extractCars($crawler);
        foreach ($cars as $carId)
            ProductCar::firstOrCreate([
                'logicalref' => $targetRef,
                'car_id' => $carId
            ], [
                'connection_id' => $connection->id
            ]);

        $oems = SparetoBot::extractOems($crawler);
        foreach ($oems as ['brand' => $brand, 'oems' => $oeList])
            foreach ($oeList as $oem)
                ProductOem::firstOrCreate([
                    'brand' => $brand,
                    'logicalref' => $targetRef,
                    "oem" => $oem
                ], [
                    'connection_id' => $connection->id
                ]);


        $connection->is_connection_applied = true;
        $connection->save();
    }
}
