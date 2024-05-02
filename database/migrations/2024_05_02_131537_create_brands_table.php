<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    protected $connection = 'bigdata';

    public function up(): void
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
        });

        Schema::create('search_page_brands', function (Blueprint $table) {
            $table->foreignId('search_page_id');
            $table->foreignId('brand_id');

            $table->primary(['search_page_id', 'brand_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('brands');
        Schema::dropIfExists('search_page_brands');
    }
};
