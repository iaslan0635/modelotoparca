<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'bigdata';

    public function up(): void
    {
        Schema::create('search_ajaxes', function (Blueprint $table) {
            $table->string('keyword');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('search_ajaxes');
    }
};
