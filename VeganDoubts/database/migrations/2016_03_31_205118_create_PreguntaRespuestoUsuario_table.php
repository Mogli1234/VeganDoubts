<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntaRespuestoUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas_respuestas_usuarios',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_pregunta');
            $table->integer('id_respuesta_usuario');
            $table->integer('user_id');
            $table->date('fecha')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('id_pregunta')->references('id')->on('preguntas');
            $table->foreign('id_respuesta_usuario')->references('id')->on('respuestas_usuarios');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('preguntas_respuestas_usuarios');
    }
}
