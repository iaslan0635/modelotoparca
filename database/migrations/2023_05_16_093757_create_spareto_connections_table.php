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
        Schema::create('spareto_connections', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->unsignedInteger('product_id')->index();
            $table->string('url');
            $table->string('keyword');
            $table->string('keyword_field');

            $table->string('connected_by')->index();
            $table->boolean('is_connection_applied')->default(false)->index();

            $table->index(['product_id', 'is_connection_applied']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spareto_connections');
    }
};
