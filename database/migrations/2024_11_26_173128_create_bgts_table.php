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
        Schema::create('bgts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('captain')->nullable();
            $table->string('member1')->nullable();
            $table->string('member2')->nullable();
            $table->string('member3')->nullable();
            $table->string('member4')->nullable();
            $table->string('nim');
            $table->string('phone')->nullable();
            $table->string('institution');
            $table->string('receipt');
            $table->enum('category', ['Drama', 'Musik', 'Dance']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bgts');
    }
};
