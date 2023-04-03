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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("user_id")->index();
            $table->unsignedInteger("invoice_id")->nullable()->index();
            $table->unsignedInteger("coupon_id")->nullable()->index();

            $table->string("payment_method");
            $table->string("payment_status")->nullable();
            $table->datetime("payment_date")->nullable();


            $table->unsignedInteger("shipment_address_id")->index();
            $table->unsignedInteger("invoice_address_id")->index();
            $table->string("shipment_status")->nullable();
            $table->json("payment_data")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
