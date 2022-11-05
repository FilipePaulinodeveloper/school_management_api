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
        Schema::create('calendario_eventos', function (Blueprint $table ){
            $table->id();
            $table->string('titulo_envento', 45);
            $table->string('categoria', 1);
            $table->date('data_inicio');
            $table->date('data_termino')->nullable();
            $table->boolean('dia_todo')->nullable();
            $table->text('descricao')->nullable();
            $table->string('link')->nullable();
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendario_eventos');
    }
};
