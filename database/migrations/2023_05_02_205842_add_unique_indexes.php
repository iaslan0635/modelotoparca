<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    const UNIQUE_COLUMNS = [
        "prices" => "product_id",
        "sparetobot_archives" => "path",
        "images" => "path"
    ];

    public function up(): void
    {
        foreach (self::UNIQUE_COLUMNS as $tableName => $column)
            Schema::table($tableName, fn(Blueprint $table) => $table->unique($column));
    }

    public function down(): void
    {
        foreach (self::UNIQUE_COLUMNS as $tableName => $column)
            Schema::table($tableName, fn(Blueprint $table) => $table->dropUnique($column));
    }
};
