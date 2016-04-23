<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Mockery\Exception;

class PreguntaCategoria extends Model
{
    protected  $filleable=['categoria_id', 'pregunta_id', 'id_sub_categoria_'];
    protected  $hidden=['id'];

    #region Metodo para agregar a la lista categoria
    public function agregarPregunta_Categoria($request,$new_pregunta){
        try{
            if(array_key_exists('sub_categoria_id',$request))
            {
                $new_pregunta_categoria = DB::table('preguntas_categorias')->insertGetId([
                    'categoria_id' => $request['categoria_id'],
                    'pregunta_id'=>$new_pregunta,
                    'sub_categoria_id'=>$request['sub_categoria_id']
                ]);
            }else
            {
                $new_pregunta_categoria = DB::table('preguntas_categorias')->insertGetId([
                    'categoria_id' => $request['categoria_id'],
                    'pregunta_id'=>$new_pregunta
                ]);
            }
        }catch (Exception $e){
            $new_pregunta_categoria=$e->getMessage();
        }
        return $new_pregunta_categoria;
    }
    #endregion

    #region Metodo para elimiar el record deacuerdo a la pregunta
    public function eliminarPreguntaCategoria($id_pregunta){
        try{
            $delete_record = DB::table('preguntas_categorias')->where('pregunta_id',$id_pregunta)->delete();
        }catch (Exception $e){
            $delete_record = $e->getMessage();
        }
        return $delete_record;
    }
    #endregion
}
