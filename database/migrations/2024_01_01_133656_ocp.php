<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public string $bigdataDbName;

    public function __construct()
    {
        $this->bigdataDbName = config("database.connections.bigdata.database");
    }

    public function up(): void
    {
        $primaryDbName = config("database.connections.mysql.database");

        if (app()->runningUnitTests()) {
            DB::statement("DROP DATABASE IF EXISTS $this->bigdataDbName");
            DB::statement("CREATE DATABASE $this->bigdataDbName");
        } else {
            DB::statement("CREATE DATABASE IF NOT EXISTS $this->bigdataDbName");
        }

        DB::connection("bigdata")->statement("CREATE TABLE cars LIKE $primaryDbName.cars");
        DB::connection("bigdata")->statement("INSERT INTO cars SELECT * FROM $primaryDbName.cars");

        Schema::connection("bigdata")->create('products', function (Blueprint $table) {
            $table->integer("id")->primary();
            $table->string("title")->index();
            $table->string("subtitle")->index();
            $table->string("brand")->index();

            $table->json("specifications")->nullable();
            $table->json("tecdoc")->nullable();
        });

        Schema::connection("bigdata")->create('product_oems', function (Blueprint $table) {
            $table->integer("product_id")->index();
            $table->string("brand")->index();
            $table->string("oem")->index();

            $table->primary(["product_id", "brand", "oem"]);
            $table->index(["product_id", "oem"]);

            $table->foreign("product_id")->references("id")->on("products")->cascadeOnDelete();
        });

        Schema::connection("bigdata")->create('product_cars', function (Blueprint $table) {
            $table->integer("product_id");
            $table->unsignedBigInteger("car_id");

            $table->primary(["product_id", "car_id"]);
            $table->index(["car_id", "product_id"]);

            $table->foreign("product_id")->references("id")->on("products")->cascadeOnDelete();
            $table->foreign("car_id")->references("id")->on("cars")->cascadeOnDelete();
        });
    }
};
