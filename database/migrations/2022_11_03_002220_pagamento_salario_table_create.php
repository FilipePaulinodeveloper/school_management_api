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
        Schema::create('pagamento_salario_professor', function (Blueprint $table){
            
            $table->id();
            $table->foreignId('professor_id')->constrained('professores')->onUpdate('cascade')->onDelete('cascade');
            $table->decimal('valor_salario', $precicion = 6 , $scale = 3);
            $table->date('data_pagamento');
            $table->date('data_pago')->nullable();
            $table->tinyInteger('forma_pagamento')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagamento_salario_professor');
    }
};
