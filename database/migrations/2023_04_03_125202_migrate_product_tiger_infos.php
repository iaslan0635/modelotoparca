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
        Schema::table('products', function (Blueprint $table) {
            $table->string('producercode')->nullable()->index();
            $table->string('cross_code')->nullable()->index();
            $table->string('oem_codes')->nullable()->index();
            $table->string('producercode2')->nullable()->index();
            $table->string('similar_product_codes')->nullable()->index();

            $table->string('producercode_unbranded')->nullable()->storedAs("regexp_replace(substring_index(`producercode`, ' ', -1), '[^a-zA-Z0-9]', '')")->index();
            $table->string('cross_code_regexed')->nullable()->storedAs("regexp_replace(`cross_code`, '[^a-zA-Z0-9]', '')")->index();
            $table->string('producercode_regexed')->nullable()->storedAs("regexp_replace(`producercode`, '[^a-zA-Z0-9]', '')")->index();
            $table->string('producercode2_regexed')->nullable()->storedAs("regexp_replace(`producercode2`, '[^a-zA-Z0-9]', '')")->index();
            $table->string('similar_product_codes_regexed')->nullable()->storedAs("regexp_replace(`similar_product_codes`, '[^a-zA-Z0-9]', '')")->index();
            $table->string('oem_codes_regexed')->nullable()->storedAs("regexp_replace(`oem_codes`, '[^a-zA-Z0-9]', '')")->index();
            $table->string('oem_codes_unspaced')->nullable()->storedAs('replace(`oem_codes`, " ", "")')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('producercode');
            $table->dropColumn('cross_code');
            $table->dropColumn('oem_codes');
            $table->dropColumn('producercode2');
            $table->dropColumn('similar_product_codes');
            $table->dropColumn('producercode_unbranded');
            $table->dropColumn('cross_code_regexed');
            $table->dropColumn('producercode_regexed');
            $table->dropColumn('producercode2_regexed');
            $table->dropColumn('similar_product_codes_regexed');
            $table->dropColumn('oem_codes_regexed');
            $table->dropColumn('oem_codes_unspaced');
        });
    }
};
