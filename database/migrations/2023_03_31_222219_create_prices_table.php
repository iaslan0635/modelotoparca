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
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('variant_id')->nullable();
            $table->unsignedInteger('tax_id')->nullable();

            $table->decimal('price', 12, 4, true)->nullable();
            $table->string('currency')->default('try');
            $table->boolean('discount')->default(false);
            $table->string('discount_title')->nullable();
            $table->longText('discount_description')->nullable();
            $table->string('discount_type')->default('percentile');
            $table->decimal('discount_amount', 12, 4)->default(0.0000);
            $table->dateTime('discount_start_at')->nullable();
            $table->dateTime('discount_end_at')->nullable();
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
