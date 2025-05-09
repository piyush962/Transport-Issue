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
        Schema::create('query_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('issue_id')->constrained();
            $table->foreignId('user_id')->constrained('users');
            $table->enum('action', ['viewed', 'claimed', 'responded', 'escalated', 'reminded', 'unassigned']);
            $table->text('notes')->nullable();
            $table->timestamp('logged_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('query_logs');
    }
};
