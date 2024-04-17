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
        Schema::create('produto', function(Blueprint $table) {
                $table->id()->primary()->autoIncrement();
                $table->text('descricao');
                $table->text('imagem')->charset('binary');
                $table->decimal('preco',5,2);
                $table->foreignId('user_id')->constrained(
                    table: 'users', indexName: 'produto_user_id'
                );
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto');
    }
};
