<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tiger_products', function (Blueprint $table) {
            $table->id();
            $table->integer('active');
            $table->text('card_type')->nullable();
            $table->text('code')->nullable();
            $table->text('name')->nullable();
            $table->text('name2')->nullable();
            $table->text('name3')->nullable();
            $table->text('name4')->nullable();
            $table->text('stgrpcode')->nullable();
            $table->text('producercode')->nullable();
            $table->text('specode')->nullable();
            $table->text('specode2')->nullable();
            $table->text('salesbrws')->nullable();
            $table->text('dominantref')->nullable();
            $table->text('image1')->nullable();
            $table->text('image2')->nullable();
            $table->text('unitsetref')->nullable();
            $table->text('markref')->nullable();
            $table->text('sellprvat')->nullable();
            $table->text('cross_code')->nullable();
            $table->text('oem_codes')->nullable();
            $table->text('producercode2')->nullable();
            $table->text('web_name')->nullable();
            $table->text('similar_product_codes')->nullable();
            $table->text('minimum_sales_amount')->nullable();
            $table->text('market_place')->nullable();
            $table->text('kbt')->nullable();
            $table->text('ptype')->nullable();
            $table->text('definition')->nullable();
            $table->text('begin_date')->nullable();
            $table->text('end_date')->nullable();
            $table->text('price')->nullable();
            $table->text('currency')->nullable();
            $table->text('incvat')->nullable();
            $table->text('sales_discount_rate')->nullable();
            $table->text('fitting_position')->nullable();
            $table->text('onhand')->nullable();
            $table->text('condition')->nullable();
            $table->text('abk')->nullable();
            $table->longText('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tiger_products');
    }
};
