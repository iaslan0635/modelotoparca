<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('merchant_questions', function (Blueprint $table) {
            $table->id();
            $table->string('merchant');
            $table->string('merchant_id');
            $table->string('customer_fullname');
            $table->dateTime('date');
            $table->json('conversation');
            $table->json('data');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('merchant_questions');
    }
};
