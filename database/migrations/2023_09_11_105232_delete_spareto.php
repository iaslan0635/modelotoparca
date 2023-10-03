<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('spareto_connections');
        Schema::dropIfExists('sparetobot_archives');
        Schema::dropIfExists('sparetobot_dones');
    }
};
