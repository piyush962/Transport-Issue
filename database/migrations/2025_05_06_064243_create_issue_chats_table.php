<?php

use App\Models\Issue;
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
        Schema::create('issue_chats', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('issue_id')->constrained('issues');
             $table->foreignIdFor(Issue::class)->nullable()->index();
             $table->foreignIdFor(User::class,'sender_id','id')->nullable()->index();
            // $table->foreignId('sender_id')->comment('ID of the driver or support member from user table');
            $table->text('message')->nullable();
            $table->string('attachment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issue_chats');
    }
};
