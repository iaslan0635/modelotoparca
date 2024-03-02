<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bigdata')->table('products', function (Blueprint $table) {
            $table->json('images');
            $table->string('category');
            $table->string('mpn');
            $table->string('sku');
            $table->string('gtin13');

            $table->json('specifications')->change();
            $table->json('tecdoc')->change();
        });
    }
};
