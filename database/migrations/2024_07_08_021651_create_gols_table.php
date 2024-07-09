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
        Schema::create('gols', function (Blueprint $table) {
            $table->id();
            $table->integer('minuto');
            $table->string('desc');
            $table->foreignId('jugador_id')->constrained();
            $table->foreignId('partido_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gols');
    }
};
