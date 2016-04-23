<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosPreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_preguntas',function(Blueprint $table){
            $table->increments('id');
            $table->integer('usuario_id');
            $table->integer('pregunta_id');
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('pregunta_id')->references('id')->on('preguntas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios_preguntas');
    }
}
