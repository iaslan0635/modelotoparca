<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('trackings', function (Blueprint $table) {
            $table->unsignedInteger("product_id")->nullable();
            $table->boolean("success")->nullable();
            $table->json("result")->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('trackings', function (Blueprint $table) {
            $table->dropColumn("product_id");
            $table->dropColumn("success");
            $table->dropColumn("result");
        });
    }
};
