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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->enum('rule', ['catalog', 'cart'])->default('catalog');
            $table->enum('type', ['amount', 'percentage'])->default('amount');
            $table->string('name', 255);
            $table->json('data')->nullable();
            $table->float('amount')->default(0.00);
            $table->integer('customer_group_id')->nullable();
            $table->string('coupon', 255)->nullable()->unique();
            $table->timestamp('starts_at')->nullable();
            $table->timestamp('ends_at')->nullable();
            $table->integer('max_uses')->default(0)->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
