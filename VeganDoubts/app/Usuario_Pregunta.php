<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;
class Usuario_Pregunta extends Model
{
    protected $fillable =['usuario_id','pregunta_id'];
    protected $hidden=['id'];

    #region Metodo para asociar un usuario a una pregunta
    public function agregarUsuario_Pregunta($pregunta_id){
        $record = DB::table('usuarios_preguntas')->insert([
            'usuario_id' => Auth::user()->id,
            'pregunta_id'=>$pregunta_id
        ]);
        return $record;
    }
    #endregion

    #region Metodo para eliminar un pregunta asociada a un asuario
     public function eliminarPreguntaDeUsuario($id_pregunta){
        $deleted_record = DB::table('usuarios_preguntas')->where('pregunta_id',$id_pregunta)->delete();
         return $deleted_record;
     }
    #endregion

    #region Metodo para cargar las preguntas de todos los usuarios
        public function loadQuestionFromUSer(){
            $pregunta_list = DB::table('usuarios_preguntas')
                ->join('users','usuarios_preguntas.usuario_id','=','users.id')
                ->join('preguntas','usuarios_preguntas.pregunta_id','=','preguntas.id')
                ->orderBy('preguntas.id', 'desc')
                ->select('preguntas.pregunta_titulo','preguntas.id','users.name')
                ->get();
            return $pregunta_list;
        }
    #endregion

    #region Metodo para cargar la lista de preguntas del usuario logeado
    public function loadQuestionFromLogUser($id){
        $pregunta_user_list = DB::table('usuarios_preguntas')
            ->join('users','usuarios_preguntas.usuario_id','=','users.id')
            ->join('preguntas','usuarios_preguntas.pregunta_id','=','preguntas.id')
            ->orderBy('preguntas.id', 'desc')
            ->where('users.id',$id)
            ->select('preguntas.pregunta_titulo','preguntas.id','users.name')
            ->get();
        return $pregunta_user_list;
    }
    #endregion
}
