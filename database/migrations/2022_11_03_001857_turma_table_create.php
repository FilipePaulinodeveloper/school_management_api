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
        Schema::create('turmas', function (Blueprint $table) {

            $table->id();
            $table->string('nome', 40);
            $table->tinyInteger('modalidade');
            $table->date('inicio_aulas');
            $table->date('termino_aulas');
            $table->boolean('status')->nullable();           
            
            $table->foreignId('professor_id')->constrained('professores');
            $table->foreignId('curso_id')->constrained('cursos');

            $table->decimal('preco_curso', $precicion = 6 , $scale = 3);
            $table->tinyInteger('dia_aula');
            $table->tinyInteger('qtd_aulas');
            $table->tinyInteger('qtd_aulas_assistidas')->nullable();
            $table->tinyInteger('turno_aulas');
            $table->time('horaio_aula');      

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turmas');
    }
};
