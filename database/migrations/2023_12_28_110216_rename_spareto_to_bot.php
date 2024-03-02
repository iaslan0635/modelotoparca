<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::rename('spareto_products', 'bot_products');
    }

    public function down(): void
    {
        Schema::rename('bot_products', 'spareto_products');
    }
};
