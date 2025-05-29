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
        Schema::table('deliveries', function (Blueprint $table) {
            $table->foreignId('assigned_by')->nullable()->constrained('users')->onDelete('set null')->after('driver_id');
            $table->timestamp('estimated_delivery_time')->nullable()->after('drop_location');
            $table->enum('delivery_type', ['normal','standard', 'urgent'])->default('standard')->after('estimated_delivery_time');
            $table->timestamp('delivered_time')->nullable()->after('delivery_type');
            $table->integer('delay_time')->nullable()->comment('Time in minutes for delay')->after('delivered_time');
            $table->string('delay_reason')->nullable()->comment('Reason for delay, if any')->after('delay_time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('deliveries', function (Blueprint $table) {
            //
        });
    }
};
