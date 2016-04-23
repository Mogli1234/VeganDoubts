<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pregunta as pregunta;
use App\Categoria as categoria;
use App\Usuario_Pregunta as pregunta_user;
use App\Sub_Categoria as sub_cat;
use App\PreguntaRespuestaUsuario as pregunta_respues;
use App\Http\Requests\PreguntaRequest;
use Auth;
class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PreguntaList = new pregunta_user();
        $PreguntaList= $PreguntaList->loadQuestionFromLogUser(Auth::user()->id);
        return view('pregunta.index')->with('preguntasList', $PreguntaList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categ = new categoria();
        $sub_cat = new sub_cat();
        $categ = $categ->mostrar_categoria();
        $sub_cat = $sub_cat->mostrar_sub_categoria();
        return view('pregunta.create')->with(['categorias'=>$categ,'subCategoria'=>$sub_cat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PreguntaRequest $request)
    {
      $new_pregunta = new pregunta();
       
        if($new_pregunta->crearPregunta($request->all())){
            return redirect('/Pregunta/create')->with(['status'=>'Tu pregunta ha sido posteada']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_question = new pregunta();
        $show_anwers = new pregunta_respues();
        $show_anwers = $show_anwers->loadAnwerFromQuestion($id);
        $show_question= $show_question->where('id',$id)->get();
        return view('pregunta.show')->with(['question'=>$show_question,'answersList'=>$show_anwers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categ = new categoria();
        $categ = $categ->mostrar_categoria();
        $show_question = new pregunta();
        $show_question= $show_question->where('id',$id)->get();
        return view('pregunta.edit')->with(['question'=>$show_question,'categorias'=>$categ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PreguntaRequest $request, $id)
    {
        $show_question = new pregunta();
        if($show_question->actualizarPregunta($request->all(),$id)){
            return redirect('/Pregunta');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = new pregunta();
       if($question->eliminarPregunta($id)){
           return redirect('/Pregunta');
       }
    }
    
}
