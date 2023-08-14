<?php

namespace App\Facades;

use App\Bots\SparetoBot;
use App\Models\Product;
use App\Models\ProductCar;
use App\Models\ProductOem;
use App\Models\SparetoConnection;
use Illuminate\Support\Facades\DB;

class SparetoConnector
{
    public static function connect(SparetoConnection $connection)
    {
        DB::transaction(function () use ($connection) {
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
            Product::where("id", $targetRef)->searchable();
        });
    }

    public static function disconnect(SparetoConnection $connection, $deleteConnection = false)
    {
        DB::transaction(function () use ($deleteConnection, $connection) {
            ProductCar::where("connection_id", $connection->id)->delete();
            ProductOem::where("connection_id", $connection->id)->delete();
            if ($deleteConnection) {
                $connection->delete();
            } else {
                $connection->is_connection_applied = false;
                $connection->save();
            }

            Product::where("id", $connection->product_id)->searchable();
        });
    }
}
