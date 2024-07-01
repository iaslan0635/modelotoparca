<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    protected $connection = 'bigdata';

    public function up(): void
    {
        Schema::table('search_page_products', function (Blueprint $table) {
            $table->unique(['search_page_id', 'url']);
            $table->dropPrimary();
        });

        Schema::table('search_page_products', function (Blueprint $table) {
            $table->id();
        });
    }

    public function down(): void
    {
        Schema::table('search_page_products', function (Blueprint $table) {
            $table->dropUnique('search_page_products_search_page_id_index_unique');
            $table->dropPrimary('search_page_products_id_primary');
            $table->primary(['search_page_id', 'url']);
            $table->dropColumn('id');
        });
    }
};
