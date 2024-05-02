<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    protected $connection = 'bigdata';

    public function up(): void
    {
        Schema::create('search_pages', function (Blueprint $table) {
            $table->id();
            $table->string('keyword')->unique();
            $table->integer('pageCount');
            $table->enum('type', ['oem', 'keyword'])->index();
            $table->string('url')->index();
            $table->json('brands');
            $table->string('categories');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('search_results');
    }
};
