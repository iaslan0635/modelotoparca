<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'bigdata';

    public function up(): void
    {
        Schema::create('search_page_products', function (Blueprint $table) {
            $table->foreignId('search_result_id');
            $table->foreignId('product_id');
            $table->integer('page');
            $table->integer('index')->index();

            $table->primary(['search_result_id', 'product_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('search_page_products');
    }
};
