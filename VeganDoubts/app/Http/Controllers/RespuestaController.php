<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Pregunta as pregunta;
use App\RespuestaUsuario as respUs;
use App\Http\Requests\RespuestaRequest;
class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $pregunta = new pregunta();
        $pregunta = $pregunta->MostrarPregunta($id);
        return view('respuesta.create')->with('pregunta_data',$pregunta);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RespuestaRequest $request)
    {
        $new_respuesta = new respUs();
        if($new_respuesta->insertRespuestaUsuario($request->all())){
            return redirect('/Pregunta/'.$request->pregunta_id);
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($preunta_id,$id)
    {
        $pregunta = new pregunta();
        $pregunta = $pregunta->MostrarPregunta($preunta_id);
        $respuesta = new respUs();
        $respuesta = $respuesta->showByIdRespuestaUsuario($id);
        return view('respuesta.edit')->with(['pregunta_data'=>$pregunta,'respuesta_edit'=>$respuesta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RespuestaRequest $request, $id)
    {
        $new_respuesta = new respUs();
        if($new_respuesta->updateRespuestaUsuario($request->all(),$id)){
            return redirect('/Pregunta/'.$request->pregunta_id);
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
        $delete_record = new respUs();
        if($delete_record->deleteRespuestaUsuario($id)){
            return redirect()->back();
        }
    }
}
