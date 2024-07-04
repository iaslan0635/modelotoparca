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
            $table->string('url')->index()->nullable();
            $table->string('article_no')->index()->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('search_page_products', function (Blueprint $table) {
            $table->dropColumn('url');
            $table->dropColumn('article_no');
        });
    }
};
