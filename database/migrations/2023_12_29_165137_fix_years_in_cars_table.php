<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->integer("from_year")->storedAs("substring_index(`produced_from`, '.', -1)")->change();
            $table->integer("to_year")->storedAs("substring_index(`produced_to`, '.', -1)")->change();
        });
    }

    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->integer("from_year")->storedAs("substring_index(`produced_from`, '-', 1)")->change();
            $table->integer("to_year")->storedAs("substring_index(`produced_to`, '-', 1)")->change();
        });
    }
};
