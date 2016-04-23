<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	DB::table('categorias')->insert
     	(
     		['categoria'=>'salud',]
     	);
     	DB::table('categorias')->insert
     	(
     		['categoria'=>'etica',]
     	);
     	DB::table('categorias')->insert
     	(
     		['categoria'=>'medio ambiente',]
     	);
     	DB::table('categorias')->insert
     	(
     		['categoria'=>'anatomia',]
     	);
     	DB::table('categorias')->insert
     	(
     		['categoria'=>'psicologia',]
     	);
    }
}
