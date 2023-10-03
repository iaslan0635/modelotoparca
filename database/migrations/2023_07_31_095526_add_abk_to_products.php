<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('abk')->nullable()->index()->after('producercode2');
            $table->string('abk_regexed')->nullable()->index()->storedAs("regexp_replace(`abk`, '[^a-zA-Z0-9]', '')");
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('abk_regexed');
            $table->dropColumn('abk');
        });
    }
};
