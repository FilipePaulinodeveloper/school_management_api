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
        Schema::create('categoria_gasto' , function (Blueprint $table){
            
            $table->foreignId('gastos_id')->constrained('gastos')->onUpdate('cascade')->onDelete('cascade');;
            $table->foreignId('categoria_id')->constrained('categoria_do_gasto')->onUpdate('cascade')->onDelete('cascade');;
            
            // $table->unsignedBigInteger('gastos_id');
            // $table->foreign('gastos_id')->references('id')->on('gastos');
            

            // $table->unsignedBiginteger('categoria_id');
            // $table->foreign('categoria_id')->references('id')->on('categoria_do_gasto');    
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_gasto');
        
    }
};
