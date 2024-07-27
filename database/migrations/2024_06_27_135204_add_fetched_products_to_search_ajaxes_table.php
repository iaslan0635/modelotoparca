<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'bigdata';

    public function up(): void
    {
        Schema::table('search_ajaxes', function (Blueprint $table) {
            $table->json('fetched_products')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('search_ajaxes', function (Blueprint $table) {
            $table->dropColumn('fetched_products');
        });
    }
};
