<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\PreguntaRespuestaUsuario as preus;
use Auth;
class RespuestaUsuario extends Model
{
    protected $table = 'respuesta_usuario';
    public $timestamps = false;
    protected $fillable = ['id', 'respuesta'];
    #region Metodo para guardar la respuesta
    public function insertRespuestaUsuario($request)
    {
        $new_pregunta= new preus();
        $respuestaUsuario = DB::table('respuestas_usuarios')->insertGetId([
            'respuesta' =>$request['respuesta']
        ]);
        $new_pregunta->insertPreguntaRespuestaUsuario($request['pregunta_id'],Auth::user()->id,$respuestaUsuario);
        return $respuestaUsuario;
    }
    #endregion

    #region Metodo para mostrar las respuestas
    public function showRespuestaUsuario()
    {
        $respuestaUsuario = DB::table('respuesta_usuario')
            ->select('id','respuesta')
            ->get();
        return $respuestaUsuario;
    }
    #endregion

    #region metodo para mostrar una respuesta
    public function showByIdRespuestaUsuario($id)
    {
        $respuestaUsuario = DB::table('respuestas_usuarios')
            ->select('id','respuesta')
            ->where('id', $id)
            ->get();
        return $respuestaUsuario;
    }
    #endregion

    #region metodo para actualizar una respuesta
    public function updateRespuestaUsuario($request,$id){
        $respuestaUsuario = DB::table('respuestas_usuarios')
            ->where('id',$id)
            ->update([
                'respuesta' =>$request['respuesta']
            ]);
        return $respuestaUsuario;
    }
    #endregion

    #region Metodo para eliminar una pregunta
    public function deleteRespuestaUsuario($id)
    {
        $pregunta_respuesta = new preus();
        if($pregunta_respuesta->deletePreguntaRespuestaUsuario($id)){
            $delete_record=DB::table('respuestas_usuarios')->where('id',$id)->delete();
            return $delete_record;
        }
    }
    #endregion

}
