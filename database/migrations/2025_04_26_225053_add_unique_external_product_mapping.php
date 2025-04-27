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
        Schema::table('marketplace_product_mappings', function (Blueprint $table) {
            $table->unique(['external_product_id', 'marketplace_account_id'], 'external_marketplace_unique');
        });
    }

    public function down(): void
    {
        Schema::table('marketplace_product_mappings', function (Blueprint $table) {
            $table->dropUnique('external_marketplace_unique');
        });
    }
};
