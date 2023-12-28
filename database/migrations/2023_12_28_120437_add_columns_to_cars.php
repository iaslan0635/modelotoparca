<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public $cols = [
        "engine",
        "type",
        "power_kw",
        "power_hp",
        "drive_type",
        "cylinders",
        "engine_type",
        "fuel_type",
        "fuel_handling",
        "transmission",
        "braking_system",
    ];

    public function up(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            foreach ($this->cols as $col) {
                $table->string($col)->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            foreach ($this->cols as $col) {
                $table->dropColumn($col);
            }
        });
    }
};
