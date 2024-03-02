<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('product_merchant_attributes', function (Blueprint $table) {
            $table->string('merchant_id')->change();
        });
    }
};
