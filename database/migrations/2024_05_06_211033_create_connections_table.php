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
        Schema::dropIfExists('connections');
        Schema::create('connections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('follower_id')->constrained('users')->casdadeOnDelete();
            $table->foreignId('followed_id')->constrained('users')->casdadeOnDelete();
            $table->unique(['follower_id', 'followed_id']);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('connections', function (Blueprint $table) {
        //     $table->dropForeign('follower_id');
        //     $table->dropForeign('followed_id');
        // });
        Schema::dropIfExists('connections');
    }
};
