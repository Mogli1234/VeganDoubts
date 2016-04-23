<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Categoria extends Model
{
    protected $fillable=['categoria'];
    protected  $hidden=['id'];
    public function mostrar_categoria()
    {
        $mostrar_categoria = DB::table('categorias')->get();
        return $mostrar_categoria;
    }
}
