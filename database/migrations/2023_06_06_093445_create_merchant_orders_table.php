<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('merchant_orders', function (Blueprint $table) {
            $table->id();
            $table->string('merchant');
            $table->string('merchant_id');
            $table->string('number');
            $table->json('client');
            $table->json('data');
            $table->string('price');
            $table->dateTime('date');
            $table->string('status');
            $table->string('delivery_status');
            $table->string('payment_status');
            $table->json('lines');
            $table->json('line_data');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('merchant_orders');
    }
};
