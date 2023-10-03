<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('search_replacements', function (Blueprint $table) {
            $table->dropUnique('search_replacements_original_replacement_unique');
            $table->unique('original');
        });
    }

    public function down(): void
    {
        Schema::table('search_replacements', function (Blueprint $table) {
            $table->dropUnique('search_replacements_original_unique');
            $table->unique(['original', 'replacement']);
        });
    }
};
