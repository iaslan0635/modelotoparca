<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table("product_oems", function (Blueprint $table) {
            $table->integer("connection_id")->nullable()->index();
        });

        Schema::table("product_cars", function (Blueprint $table) {
            $table->integer("connection_id")->nullable()->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table("product_oems", function (Blueprint $table) {
            $table->dropColumn("connection_id");
        });

        Schema::table("product_cars", function (Blueprint $table) {
            $table->dropColumn("connection_id");
        });
    }
};
