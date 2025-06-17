<?php

use App\Models\Delivery;
use App\Models\User;
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
        Schema::create('sos_alerts', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('driver_id')->constrained('users');
            // $table->foreignId('delivery_id')->nullable()->constrained();
            $table->foreignIdFor(User::class, 'driver_id', 'id')->nullable()->index();
            $table->foreignIdFor(Delivery::class, 'delivery_id', 'id')->nullable()->index();
            $table->enum('reason', ['accident', 'medical', 'police']);
            $table->text('notes')->nullable();
            $table->string('location')->nullable(); // Or separate lat/long
            $table->boolean('acknowledged')->default(false);
            // $table->foreignId('acknowledged_by')->nullable()->constrained('users');
            $table->foreignIdFor(User::class, 'acknowledged_by', 'id')->nullable()->index();
            $table->timestamp('alerted_at');
            $table->timestamp('acknowledged_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sos_alerts');
    }
};
