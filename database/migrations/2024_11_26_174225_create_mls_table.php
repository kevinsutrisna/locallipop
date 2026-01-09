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
        Schema::create('mls', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->string('captain_name');
            $table->string('captain_whatsapp');
            $table->string('player1');
            $table->string('player2');
            $table->string('player3');
            $table->string('player4');
            $table->string('player5');
            $table->string('player6')->nullable();
            $table->string('receipt_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mls');
    }
};
