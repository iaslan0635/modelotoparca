<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_oems', function (Blueprint $table) {
            $table->unsignedInteger('logicalref')->index();
            $table->string('brand')->index();
            $table->string('oem')->index();
            $table->unique(['logicalref', 'brand', 'oem']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_oems');
    }
};
