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
        Schema::create('merchant_brand_connects', function (Blueprint $table) {
            $table->id();
            $table->string('merchant')->default('n11');
            $table->integer('merchant_id');
            $table->integer('brand_id');
            $table->timestamps();

            $table->unique(['merchant_id', 'merchant', 'brand_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchant_brand_connects');
    }
};
