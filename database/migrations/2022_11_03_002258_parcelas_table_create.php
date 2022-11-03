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
        Schema::create('parcelas' , function (Blueprint $table) {
            $table->id();
            $table->decimal('valor_parcelas', $precicion= 6 , $scale = 3);
            $table->date('data_pagamento');
            $table->date('data_vencimento');
            $table->tinyInteger('num_parcelas');
            $table->foreignId('matricula_turma_id')->constrained('turmas');
            $table->foreignId('matricula_aluno_id')->constrained('alunos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcelas');
    }
};
