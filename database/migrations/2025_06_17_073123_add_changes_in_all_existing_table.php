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
            if (!Schema::hasColumn('deliveries', 'deleted_at')) {
                $table->softDeletes();
            }
            $table->uuid('uuid');
        });

        Schema::table('driver_locations', function (Blueprint $table) {
            if (!Schema::hasColumn('driver_locations', 'deleted_at')) {
                $table->softDeletes();
            }
            $table->uuid('uuid');
        });

        Schema::table('issues', function (Blueprint $table) {
            if (!Schema::hasColumn('issues', 'deleted_at')) {
                $table->softDeletes();
            }
            $table->uuid('uuid');
        });
        Schema::table('issue_categories', function (Blueprint $table) {
            if (!Schema::hasColumn('issue_categories', 'deleted_at')) {
                $table->softDeletes();
            }
            $table->uuid('uuid');
        });
        Schema::table('issue_chats', function (Blueprint $table) {
            if (!Schema::hasColumn('issue_chats', 'deleted_at')) {
                $table->softDeletes();
            }
            $table->uuid('uuid');
        });
        Schema::table('issue_media', function (Blueprint $table) {
            if (!Schema::hasColumn('issue_media', 'deleted_at')) {
                $table->softDeletes();
            }
            $table->uuid('uuid');
        });
        Schema::table('sos', function (Blueprint $table) {
            if (!Schema::hasColumn('sos', 'deleted_at')) {
                $table->softDeletes();
            }
            $table->uuid('uuid');
        });
        Schema::table('sos_alerts', function (Blueprint $table) {
            if (!Schema::hasColumn('sos_alerts', 'deleted_at')) {
                $table->softDeletes();
            }
            $table->uuid('uuid');
        });
        Schema::table('sos_logs', function (Blueprint $table) {
            if (!Schema::hasColumn('sos_logs', 'deleted_at')) {
                $table->softDeletes();
            }
            $table->uuid('uuid');
        });
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'deleted_at')) {
                $table->softDeletes();
            }        
        });
        Schema::table('user_details', function (Blueprint $table) {
            if (!Schema::hasColumn('user_details', 'deleted_at')) {
                $table->softDeletes();
            }
            $table->uuid('uuid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
    }
};
