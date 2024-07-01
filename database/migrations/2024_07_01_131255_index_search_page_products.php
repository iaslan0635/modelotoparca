<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    protected $connection = 'bigdata';

    public function up(): void
    {
        Schema::table('search_page_products', function (Blueprint $table) {
            $table->dropIndex([
                "search_page_products_article_no_index",
                "search_page_products_index_index",
                "search_page_products_url_index",
            ]);

            $table->index(["search_page_id", "page", "index"]);
            $table->index(["search_page_id", "page", "article_no", "index"]);
        });
    }

    public function down(): void
    {
        Schema::table('search_page_products', function (Blueprint $table) {
            $table->dropIndex(["search_page_products_search_page_id_page_index_index"]);
            $table->dropIndex(["search_page_products_search_page_id_page_article_no_index_index"]);

            $table->index("article_no");
            $table->index("index");
            $table->index("url");
        });
    }
};
