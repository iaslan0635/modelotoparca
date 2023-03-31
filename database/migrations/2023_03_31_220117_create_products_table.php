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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('original_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('title', 255);
            $table->string('sub_title', 255);
            $table->longText('description')->nullable();
            $table->string('slug', 255);
            $table->string('sku', 255)->unique();
            $table->integer('quantity')->default(0);
            $table->string('status', 255);
            $table->string('type', 255);
            $table->boolean('ecommerce')->default(false);
            $table->json('data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
