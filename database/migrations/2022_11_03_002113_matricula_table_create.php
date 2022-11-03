<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matricula', function (Blueprint $table) {                        
            $table->foreignId('turma_id')->constrained('turmas');            
            $table->foreignId('aluno_id')->constrained('alunos');
            $table->decimal('preco_curso', $precicion = 6 , $scale = 3);
            $table->decimal('desconto', $precicion = 6 , $scale = 3);
            $table->decimal('valor_final', $precicion = 6 , $scale = 3);
            $table->tinyInteger('qtd_parcelas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matricula');
    }
};
