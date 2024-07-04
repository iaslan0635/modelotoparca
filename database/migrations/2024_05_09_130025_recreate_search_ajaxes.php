<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'bigdata';

    public function up(): void
    {
        Schema::dropIfExists('search_ajaxes');
        Schema::create('search_ajaxes', function (Blueprint $table) {
            $table->id();
            $table->string('keyword')->unique();
            $table->string('url');
        });
    }
};
