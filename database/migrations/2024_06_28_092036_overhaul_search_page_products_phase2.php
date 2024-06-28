<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    protected $connection = 'bigdata';

    public function up(): void
    {
        Schema::table('search_page_products', function (Blueprint $table) {
            $table->string("url")->index()->change();
            $table->string("article_no")->index()->change();

            $table->dropColumn("product_id");
            $table->dropColumn("brand_id");
        });
    }

    public function down(): void
    {
        Schema::table('search_page_products', function (Blueprint $table) {
            $table->unsignedBigInteger("product_id");
            $table->unsignedBigInteger("brand_id");

            $table->string("url")->index()->nullable()->change();
            $table->string("article_no")->index()->nullable()->change();
        });
    }
};
