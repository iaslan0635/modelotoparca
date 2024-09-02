<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('calculate_tools', function (Blueprint $table) {
            $table->index("session_id");
            $table->index("product_id");
            $table->index("user_id");

            $table->string("list_name")->nullable()->index();
            $table->dropUnique("calculate_tools_session_id_product_id_unique");
        });
    }

    public function down(): void
    {
        Schema::table('calculate_tools', function (Blueprint $table) {
            $table->dropIndex("calculate_tools_product_id_index");
            $table->dropIndex("calculate_tools_user_id_index");
            $table->dropIndex("calculate_tools_session_id_index");

            $table->dropColumn("list_name");
            $table->unique(["session_id", "product_id"]);
        });
    }
};
