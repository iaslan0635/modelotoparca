<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('product_oems', function (Blueprint $table) {
            $table->string("oem_unpaced")->storedAs("REPLACE(`oem`, ' ', '')")->index();
        });
    }

    public function down(): void
    {
        Schema::table('product_oems', function (Blueprint $table) {
            $table->dropColumn("oem_unpaced");
        });
    }
};
