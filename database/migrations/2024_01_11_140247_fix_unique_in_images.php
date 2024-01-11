<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropUnique('images_path_unique');
            $table->unique(['imageable_type', 'imageable_id', 'path']);
        });
    }
};
