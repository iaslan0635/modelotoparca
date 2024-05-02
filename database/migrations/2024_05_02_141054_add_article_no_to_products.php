<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    protected $connection = 'bigdata';

    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('article_no')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('article_no');
        });
    }
};
