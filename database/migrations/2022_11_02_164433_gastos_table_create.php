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
        Schema::create('gastos', function (Blueprint $table){
            $table->id();
            $table->string('gasto', 45);
            $table->decimal('valor', $precicion = 6 , $scale = 3);
            $table->date('data_vencimento')->nullable();
            $table->date('data_pagamento')->nullable();            
            $table->year('ano');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gastos');
    }
};
