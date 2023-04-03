<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("order_id")->index();
            $table->unsignedInteger("product_id")->index();
            $table->unsignedInteger("variant_id")->nullable()->index();
            $table->unsignedInteger("tax_id")->nullable()->index();

            $table->decimal("price",12 ,4, true);
            $table->unsignedInteger("quantity");

            $table->json("product_data")->nullable();
            $table->json("variant_data")->nullable();
            $table->json("tax_data")->nullable();
            $table->json("price_data")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
