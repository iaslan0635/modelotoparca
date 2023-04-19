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
            $table->unsignedInteger('id')->primary()->comment('logicalref');
            $table->unsignedInteger('brand_id')->nullable()->index();

            $table->string('title')->index()->fulltext();
            $table->string('sub_title')->index()->fulltext();
            $table->longText('description')->nullable()->fulltext();
            $table->string('slug')->index();
            $table->string('sku')->unique();
            $table->integer('quantity')->default(0);
            $table->string('status')->index();
            $table->string('type')->index();
            $table->boolean('ecommerce')->default(false);
            $table->json('data')->nullable();

            $table->string('part_number')->index();
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
