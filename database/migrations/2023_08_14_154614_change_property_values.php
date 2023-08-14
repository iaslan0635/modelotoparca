<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('property_values', function (Blueprint $table) {
            $table->unique(["property_id", "value"]);
            $table->index("property_id");
        });
    }

    public function down(): void
    {
        Schema::table('property_values', function (Blueprint $table) {
            $table->dropUnique(["property_id", "value"]);
            $table->dropIndex("property_id");
        });
    }
};
