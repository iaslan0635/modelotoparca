<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'bigdata';

    public function up(): void
    {
        Schema::create('search_ajax_products', function (Blueprint $table) {
            $table->foreignId('search_ajax_id');
            $table->foreignId('product_id');
            $table->enum('type', ['product', 'oen'])->index();
            $table->integer('index')->index();

            $table->primary(['search_ajax_id', 'product_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('search_ajax_products');
    }
};
