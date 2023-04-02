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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('variant_id')->nullable();
            $table->decimal('price', 12, 4)->nullable();
            $table->string('currency', 255)->default('try');
            $table->boolean('discount')->default(false);
            $table->string('discount_title', 255)->nullable();
            $table->longText('discount_description')->nullable();
            $table->string('discount_type', 255)->default('percentile');
            $table->decimal('discount_amount', 12, 4)->default(0.0000);
            $table->dateTime('discount_start_at')->nullable();
            $table->dateTime('discount_end_at')->nullable();
            $table->integer('tax_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
