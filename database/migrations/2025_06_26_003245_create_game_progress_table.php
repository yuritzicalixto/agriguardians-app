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
        Schema::create('game_progress', function (Blueprint $table) {
            $table->id();
            // start atributos de la tabla game_progress
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('level'); // Nivel jugado (1, 2 o 3)
            $table->float('time_played'); // Tiempo en segundos
            //end atributos de la tabla game_progress
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_progress');
    }
};
