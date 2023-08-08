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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->enum('type', ['input', 'listbox', 'radio'])->default('input');
            $table->enum('search_type', ['between', 'multiple', 'none'])->default('none');
            $table->boolean('show_filter')->default(false);
            $table->boolean('hidden')->default(false);
            $table->string('excel_column')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
