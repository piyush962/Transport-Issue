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
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('delivery_id')->constrained()->onDelete('cascade');
            $table->foreignId('driver_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('support_id')->nullable()->constrained('users')->onDelete('set null');
            $table->enum('type', ['basic', 'moderate', 'critical', 'new']);
            $table->bigInteger('issue_category_id')->nullable();
            $table->text('description')->nullable();
            $table->enum('status', ['open', 'being_handled', 'claimed', 'resolved', 'escalated']);
            $table->timestamp('reported_at');
            $table->timestamp('claimed_at')->nullable();
            $table->timestamp('resolved_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};
