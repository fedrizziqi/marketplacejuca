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
        Schema::create('reserva', function(Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->integer('quantidade');
            $table->dateTime('dataHorario');
            $table->foreignId('disponibilidade_id')->constrained(
                table: 'disponibilidade', indexName: 'reserva_disponibilidade_id'
            );
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'reserva_user_id'
            );
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva');
    }
};
