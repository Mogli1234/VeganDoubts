<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class PreguntaRespuestaUsuario extends Model
{
    protected $fillable = ['id_pregunta', 'id_respuesta_usuario', 'fecha'];
    protected $hidden=['id'];

    #region Metodo para guardar en la db las preguntas y el usuario
    public function insertPreguntaRespuestaUsuario($id_pregunta,$id_user,$id_respuesta)
    {
        $preguntaRespuestaUsuario = DB::table('preguntas_respuestas_usuarios')->insert([
            'id_pregunta' =>$id_pregunta,
            'id_respuesta_usuario' =>$id_respuesta,
            'user_id'=>$id_user
        ]);
        return $preguntaRespuestaUsuario;
    }
    #endregion

    #region Metodo para eliminar la pregunta y la respuesta
    public function deletePreguntaRespuestaUsuario($id)
    {
        $preguntaRespuestaUsuario = DB::table('preguntas_respuestas_usuarios')
            ->where('id_respuesta_usuario',$id)->delete();
        return $preguntaRespuestaUsuario;
    }
    #endregion

    #region Metodo para cargar todas la respuestas de una pregunta
    public function loadAnwerFromQuestion($id_question){
        $answer_list = DB::table('preguntas_respuestas_usuarios')
        ->join('users','preguntas_respuestas_usuarios.user_id','=','users.id')
        ->join('preguntas','preguntas_respuestas_usuarios.id_pregunta','=','preguntas.id')
        ->join('respuestas_usuarios','preguntas_respuestas_usuarios.id_respuesta_usuario','=','respuestas_usuarios.id')
        ->where('preguntas.id',$id_question)
        ->select('respuestas_usuarios.respuesta','users.name','fecha','users.email','respuestas_usuarios.id')
        ->get();
        return $answer_list;
    }
    #endregion

}
