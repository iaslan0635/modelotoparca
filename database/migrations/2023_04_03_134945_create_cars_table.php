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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('maker_id')->index();

            $table->string('name')->index();
            $table->string('short_name')->nullable()->index();
            $table->string('body_type')->nullable();
            $table->string('permalink')->index()->unique();
            $table->string('power')->nullable();
            $table->string('capacity')->nullable();

            $table->integer('from_year')->storedAs("substring_index(`produced_from`, '-', 1)")->index();
            $table->integer('to_year')->storedAs("substring_index(`produced_to`, '-', 1)")->index();
            $table->string('produced_from', 50)->nullable()->index();
            $table->string('produced_to', 50)->nullable()->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
