<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tiger_products', function (Blueprint $table) {
            $table->string('raf_no')->nullable();
            $table->integer('stock_on_51')->nullable();
            $table->integer('stock_on_38')->nullable();
            $table->integer('stock_on_01')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('tiger_products', function (Blueprint $table) {
            $table->dropColumn('raf_no');
            $table->dropColumn('stock_on_51');
            $table->dropColumn('stock_on_38');
            $table->dropColumn('stock_on_01');
        });
    }
};
