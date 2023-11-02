<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('spareto_products', function (Blueprint $table) {
            $table->string("origin_field")->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('spareto_products', function (Blueprint $table) {
            $table->dropColumn("origin_field");
        });
    }
};
