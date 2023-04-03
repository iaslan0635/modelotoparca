<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('variant_type', 255);
            $table->string('name', 255);
            $table->string('sku', 255)->unique();
            $table->integer('quantity')->default(0);
            $table->integer('low_quantity')->default(10);
            $table->boolean('has_variant')->default(false);
            $table->string('status', 255)->default('active');
            $table->json('data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variants');
    }
};
