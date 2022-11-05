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
        Schema::create('subcategoria', function(Blueprint $table){
            $table->id();
            $table->string('nome_subcategoria', 45);
            $table->foreignId('categoria_id')->constrained('categoria_do_gasto')->onUpdate('cascade')->onDelete('cascade');;

            // $table->unsignedBigInteger('categoria_id');
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
        Schema::dropIfExists('subcategoria');
    }
};
