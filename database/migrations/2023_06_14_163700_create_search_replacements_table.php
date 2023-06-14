<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('search_replacements', function (Blueprint $table) {
            $table->id();
            $table->string('original');
            $table->string('replacement');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('search_replacements');
    }
};
