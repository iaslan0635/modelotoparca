<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->string("excel_file")->after("excel_column")->nullable()->index();
            $table->string("transformer")->after("hidden")->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn("excel_file");
            $table->dropColumn("transformer");
        });
    }
};
