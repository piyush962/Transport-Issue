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
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
             $table->foreignIdFor(Delivery::class, 'delivery_id', 'id')->nullable()->index()->comment('ID of the driver assigned to the delivery from user table');
             $table->foreignIdFor(User::class, 'driver_id', 'id')->nullable()->index();
             $table->foreignIdFor(User::class, 'support_id', 'id')->nullable()->index()->comment('ID of the support assigned to the delivery from user table');
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
