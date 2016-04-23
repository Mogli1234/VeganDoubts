<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Sub_Categoria extends Model
{
    //
    public function mostrar_sub_categoria()
    {
        $mostrar_sub_categoria = DB::table('sub_categorias')->get();
        return $mostrar_sub_categoria;
    }
}
