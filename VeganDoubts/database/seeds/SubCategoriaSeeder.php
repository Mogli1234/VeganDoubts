<?php

use Illuminate\Database\Seeder;

class SubCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('sub_categorias')->insert
       (
     		['sub_categoria'=>'comportamiento']
        );
        DB::table('sub_categorias')->insert
        (
     		['sub_categoria'=>'motivacion']
        );
        DB::table('sub_categorias')->insert
        (
     		['sub_categoria'=>'salud mental']
        );

    }
}
