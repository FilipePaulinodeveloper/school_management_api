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
        Schema::create('alunos', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('nome', 40);
            $table->string('sexo', 1);
            $table->date('data_nascimento');
            $table->string('numero_contato', 20);
            $table->string('email', 100);
            $table->string('rg',14);
            $table->string('cpf', 14);
            $table->string('nome_mae', 40);
            $table->string('nome_pai', 40);
            $table->string('foto_aluno', 100);
            $table->string('cep', 10);
            $table->string('rua', 45);
            $table->string('estado', 2);
            $table->string('cemplemento', 40);
            $table->smallInteger('numero_residencia');
            $table->string('cidade', 45);            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
};
