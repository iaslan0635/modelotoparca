<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bot_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->index();
            $table->unsignedBigInteger('image_id')->nullable()->index();
            $table->boolean('rejected')->default(false);
            $table->text('url');
            $table->text('bot_page_url');
            $table->timestamps();

            $table->unique(['product_id', 'url']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bot_images');
    }
};
