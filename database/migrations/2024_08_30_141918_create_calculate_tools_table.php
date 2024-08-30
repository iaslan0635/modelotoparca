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
        Schema::create('calculate_tools', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('session_id');
            $table->integer('product_id');
            $table->integer('quantity')->default(1);
            $table->timestamps();

            $table->unique(['session_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calculate_tools');
    }
};
