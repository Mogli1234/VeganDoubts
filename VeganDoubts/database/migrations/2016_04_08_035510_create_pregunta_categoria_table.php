<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntaCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas_categorias',function(Blueprint $table){
            $table->increments('id');
            $table->integer('pregunta_id');
            $table->integer('categoria_id');
            $table->integer('sub_categoria_id')->nullable();
            $table->foreign('pregunta_id')->references('id')->on('preguntas');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('sub_categoria_id')->references('id')->on('sub_categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('preguntas_categorias');
    }
}
