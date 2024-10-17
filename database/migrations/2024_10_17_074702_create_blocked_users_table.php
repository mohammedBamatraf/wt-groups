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
        Schema::create('blocked_users', function (Blueprint $table) {
            $table->foreignUuid('user_id')->constrained('users');
            $table->foreignUuid('blocked_user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blocked_users', function (Blueprint $table) {
            $table->dropForeign([
                'user_id',
                'blocked_user_id',
            ]);

            $table->dropColumn([
                'user_id',
                'blocked_user_id',
                'created_at',
                'updated_at',
            ]);
        });
    }
};
