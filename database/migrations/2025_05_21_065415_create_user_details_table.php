<?php

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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignIdFor(User::class)->nullable()->index();
            $table->text('address')->nullable();
            $table->string('driving_license_number')->nullable();
            $table->string('driving_license_doc')->nullable(); // File path
            $table->string('vehicle_type')->nullable(); // Truck, Van, etc
            $table->string('vehicle_number')->nullable();
            $table->string('vehicle_photo')->nullable(); // File path
            $table->string('aadhar_doc')->nullable(); // File path
            $table->string('emergency_contact')->nullable();
            $table->string('profile_picture')->nullable(); // File path
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
