<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('permission_trees', function (Blueprint $table) {
            $table->longText('tree')->change();
        });
    }

    public function down(): void
    {
        Schema::table('permission_trees', function (Blueprint $table) {
            $table->string('tree')->change();
        });
    }
};
