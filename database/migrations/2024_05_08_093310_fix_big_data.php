<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    protected $connection = "bigdata";

    public function up(): void
    {
        Schema::table('search_pages', function (Blueprint $table) {
            $table->dropColumn('brands');
        });

        Schema::table("search_page_products", function (Blueprint $table) {
           $table->renameColumn("search_result_id", "search_page_id");
        });
    }

    public function down(): void
    {
        Schema::table('search_pages', function (Blueprint $table) {
            $table->json('brands')->nullable();
        });

        Schema::table("search_page_products", function (Blueprint $table) {
            $table->renameColumn("search_page_id", "search_result_id");
        });
    }
};
