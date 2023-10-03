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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('number')->nullable();
            $table->integer('user_id');
            $table->integer('order_id');
            $table->dateTime('due_date')->nullable();
            $table->dateTime('paid_date')->nullable();
            $table->dateTime('refund_date')->nullable();
            $table->string('status', 255)->default('unpaid');
            $table->json('data')->nullable();
            $table->json('user_data')->nullable();
            $table->json('tax_data')->nullable();
            $table->integer('tax_id')->nullable();
            $table->decimal('tax_amount', 16)->default(0.00);
            $table->decimal('sub_total', 16)->default(0.00);
            $table->decimal('total', 16)->default(0.00);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
