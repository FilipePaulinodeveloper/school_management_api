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
        Schema::create('professores', function (Blueprint $table) {           
            $table->id();
            $table->string('nome', 40);
            $table->string('sexo', 1);
            $table->date('data_nascimento');
            $table->string('numero_contato', 20);
            $table->string('email', 100);
            $table->string('rg',14);
            $table->string('cpf', 14);
            $table->string('foto_professor', 100)->nullable();
            $table->string('nome_mae', 40);
            $table->string('nome_pai', 40);
            $table->string('cep', 10);
            $table->string('rua', 45);
            $table->string('estado', 2);
            $table->string('cemplemento', 40)->nullable();
            $table->smallInteger('numero_residencia');
            $table->string('cidade', 45);    
            $table->string('curso_formacao', 45);     
            $table->string('local_formacao', 45)->nullable();        
            $table->string('tempo_esperiencia', 10)->nullable();
            $table->string('local_trabalho', 45)->nullable();        
            $table->text('descricap-academica', 500)->nullable();
            $table->boolean('status')->nullable();
            $table->tinyInteger('tipo_conta')->nullable();
            $table->tinyInteger('banco')->nullable();
            $table->tinyInteger('tipo_chave_pix')->nullable();
            $table->string('chave_pix', 50)->nullable();
            $table->string('agencia', 45)->nullable();



      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professores');
    }
};
