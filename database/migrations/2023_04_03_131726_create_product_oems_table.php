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
            $table->unsignedInteger('logicalref')->primary();
            $table->string('brand')->index();
            $table->string('oem')->index();
            $table->string('oem_regexed')->index()->storedAs("regexp_replace(`oem`, '[^a-zA-Z0-9]', '')");
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
