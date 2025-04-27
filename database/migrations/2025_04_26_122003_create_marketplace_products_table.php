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
        Schema::create('marketplace_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marketplace_id'); // Trendyol, N11 gibi
            $table->string('marketplace_product_id');
            $table->string('name');
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
            $table->integer('stock')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->json('attributes')->nullable();
            $table->json('raw')->nullable();
            $table->timestamps();

            $table->unique(['marketplace_id', 'marketplace_product_id'], 'marketplace_product_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marketplace_products');
    }
};
