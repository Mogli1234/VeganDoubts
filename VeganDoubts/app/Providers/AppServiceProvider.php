<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Categoria as categoria;
use App\Sub_Categoria as sub_cat;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categ = new categoria();
        $sub_cat = new sub_cat();
        $categ = $categ->mostrar_categoria();
        $sub_cat = $sub_cat->mostrar_sub_categoria();
        view()->share(['categorias'=>$categ,'subCategoria'=>$sub_cat]);
        view('pregunta.create')->with(['categorias'=>$categ,'subCategoria'=>$sub_cat]);
    
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
