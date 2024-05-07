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
            $table->foreignId('user1_id')->constrained('users')->casdadeOnDelete();
            $table->foreignId('user2_id')->constrained('users')->casdadeOnDelete();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('connections', function (Blueprint $table) {
        //     $table->dropForeign('user1_id');
        //     $table->dropForeign('user2_id');
        // });
        Schema::dropIfExists('connections');
    }
};
