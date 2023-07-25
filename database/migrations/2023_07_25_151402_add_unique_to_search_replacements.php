<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('search_replacements', function (Blueprint $table) {
            try {
                $table->dropUnique("search_replacements_original_replacement_unique");
            } catch (\Throwable $t) {
            }
            $table->unique("original");
        });
    }

    public function down(): void
    {
        Schema::table('search_replacements', function (Blueprint $table) {
            try {
                $table->dropUnique("search_replacements_original_unique");
            } catch (\Throwable $t) {
            }
            $table->unique(["original", "replacement"]);
        });
    }
};
