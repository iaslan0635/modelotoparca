<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('trendyol_brands', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('merchant_brands');
    }
};
