<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('spareto_products', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->index();
            $table->longText('url')->index();
            $table->boolean('is_banned')->default(false);
            $table->timestamps();

            $table->unique(['product_id', 'url']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('spareto_products');
    }
};
