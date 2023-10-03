<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $change = function (Blueprint $table) {
            $table->dropColumn('connection_id');
            $table->string('type')->index()->default('automatic');
        };

        Schema::table('product_oems', $change);
        Schema::table('product_cars', $change);
    }
};
