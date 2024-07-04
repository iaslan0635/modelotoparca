<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'bigdata';

    public function up(): void
    {
        Schema::table('search_page_products', function (Blueprint $table) {
            $table->foreignId('brand_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('search_page_products', function (Blueprint $table) {
            $table->dropColumn('brand_id');
        });
    }
};
