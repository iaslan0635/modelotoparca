<?php

use App\Enums\OrderStatuses;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('status')->default(OrderStatuses::PENDING);
            $table->dropColumn('payment_status');
            $table->dropColumn('shipment_status');
        });
    }

    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->string('payment_status')->default('pendıng');
            $table->string('shipment_status')->default('pendıng');
        });
    }
};
