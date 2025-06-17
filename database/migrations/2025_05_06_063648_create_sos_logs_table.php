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
        Schema::create('sos_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sos_id');
            // $table->unsignedBigInteger('user_id');
             $table->foreignIdFor(User::class)->nullable()->index();
            $table->string('action'); // Acknowledged, Escalated, Resolved
            $table->text('remarks')->nullable();
            $table->timestamps();
        
            // Corrected foreign key
            // $table->foreign('sos_id')->references('id')->on('sos_alerts')->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sos_logs');
    }
};
