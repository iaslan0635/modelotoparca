<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('permission_trees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id')->index();
            $table->string('tree');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('permission_trees');
    }
};
