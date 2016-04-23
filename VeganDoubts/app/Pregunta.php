<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Usuario_Pregunta as userq;
use App\PreguntaCategoria as questcat;
class Pregunta extends Model
{
    protected $fillable = ['pregunta_titulo','pregunta_desc','respuesta_general'];
    protected $hidden= ['id'];
    private $user_question;
    private $question_categorie;
    private $state;
    public function __construct(){
        $this->user_question = new userq();
        $this->question_categorie = new questcat;
    }

    #region Metodo para crear una pregunta nueva en el sistema
    public function crearPregunta($request){
        try{
            $new_pregunta = DB::table('preguntas')->insertGetId([
                'pregunta_titulo'=>$request['titulo'],
                'pregunta_desc' => $request['descripcion']
            ]);
            $this->user_question->agregarUsuario_Pregunta($new_pregunta);
            $this->question_categorie->agregarPregunta_Categoria($request,$new_pregunta);
            $this->state = true;
        }catch (Exception $e){
            $this->state = true;
        }
        return $this->state;
    }
    #endregion

    #region Metodo para mostrar una pregunta
    public function MostrarPregunta($id){
        $mostrar_pregunta = DB::table('preguntas')
                            ->where('id',$id)->get();
        return $mostrar_pregunta;
    }
    #endregion

    #region Metodo para eliminar una pregunta
    public function eliminarPregunta($id){
        try{
            if ($this->user_question->eliminarPreguntaDeUsuario($id) && $this->question_categorie->eliminarPreguntaCategoria($id)){
                DB::table('preguntas')->where('id',$id)->delete();
                $this->state = true;
            }
        }catch (Exception $e){
            $this->state = false;
        }
    return $this->state;
    }
    #endregion

    #region Metodo para Actualizar una pregunta
    public function actualizarPregunta($request,$id){
        $edit_record = DB::table('preguntas')->where('id',$id)->update([
                'pregunta_titulo'=>$request['titulo'],
                'pregunta_desc'=> $request['descripcion']
        ]);
        return $edit_record;
    }
    #endregion

    #region Metodo para cargar todas las preguntas del sistema
    public function cargarPreguntas(){
        $preguntaList = DB::table('preguntas')->get();
        return $preguntaList;
    }
    #endregion
    
    
}
