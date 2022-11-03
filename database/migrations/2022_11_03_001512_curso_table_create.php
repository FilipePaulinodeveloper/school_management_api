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
        Schema::create('cursos', function(Blueprint $table){
            $table->id();            
            $table->string('foto_curso', 100);
            $table->string('nome', 45);
            $table->string('carga_horaria',20);
            $table->decimal('preco', $precicion = 6 , $scale = 3);
            $table->tinyInteger('nivel');
            $table->tinyInteger('prerequisitos');
            $table->string('description');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};
