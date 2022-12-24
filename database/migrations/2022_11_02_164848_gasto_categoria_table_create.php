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
        Schema::create('categoria_gasto' , function (Blueprint $table)
        {
            
            $table->foreignId('gastos_id')->constrained('gastos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('categoria_id')->constrained('categoria_do_gasto')->onUpdate('cascade')->onDelete('cascade');            
                        
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
