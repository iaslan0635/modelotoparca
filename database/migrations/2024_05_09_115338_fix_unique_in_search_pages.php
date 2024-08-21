<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'bigdata';

    public function up(): void
    {
        Schema::table('search_pages', function (Blueprint $table) {
            $table->dropUnique('search_pages_keyword_unique');
            $table->unique('url');
        });
    }

    public function down(): void
    {
        Schema::table('search_pages', function (Blueprint $table) {
            $table->dropUnique('search_pages_url_unique');
            $table->unique('keyword');
        });
    }
};
