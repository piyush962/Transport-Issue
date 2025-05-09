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
        Schema::create('issue_categories', function (Blueprint $table) {            
            $table->id();
            $table->string('category');
            $table->string('issue');
            $table->enum('complexity', ['basic', 'moderate', 'critical']);
            $table->string('language')->default('en'); // for Hindi/English versions
            $table->timestamps();           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issue_categories');
    }
};
