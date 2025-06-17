<?php

use App\Models\Issue;
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
        Schema::create('issue_media', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('issue_id')->constrained()->onDelete('cascade');
              $table->foreignIdFor(Issue::class)->nullable()->index();
            $table->enum('media_type', ['photo', 'video', 'audio']);
            $table->string('media_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issue_media');
    }
};
