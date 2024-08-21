<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'bigdata';

    public function up(): void
    {
        Schema::dropIfExists('search_page_brands');
        Schema::table('search_pages', function (Blueprint $table) {
            $table->integer('brand_id')->nullable();
        });

        Schema::table('brands', function (Blueprint $table) {
            $table->string('regexed_name')->storedAs("regexp_replace(`name`, '[^a-zA-Z0-9]', '')")->index();
        });
    }
};
