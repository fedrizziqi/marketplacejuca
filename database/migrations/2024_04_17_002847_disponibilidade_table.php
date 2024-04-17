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
        Schema::create('disponibilidade', function(Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->integer('quantidade');
            $table->date('data');
            $table->set('turno', ['manha', 'tarde', 'noite']);
            $table->foreignId('localidade_id')->constrained(
                table: 'localidade', indexName: 'disponibilidade_localidade_id'
            );
            $table->foreignId('produto_id')->constrained(
                table: 'produto', indexName: 'disponibilidade_produto_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disponibilidade');

    }
};
