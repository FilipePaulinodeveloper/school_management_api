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
            $table->decimal('valor_parcela', $precicion= 6 , $scale = 3);
            $table->date('data_pagamento')->nullable();
            $table->date('data_vencimento');
            $table->tinyInteger('num_parcelas');            
            $table->foreignId('matricula_id')->constrained('matricula')->onUpdate('cascade')->onDelete('cascade');         
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
