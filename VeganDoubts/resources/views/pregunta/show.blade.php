@extends('layouts.app')
@section('content')
<div class="row" xmlns="http://www.w3.org/1999/html">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{$question[0]->pregunta_titulo}}</h2>
            </div>
            <div class="x_content">
                <br/>
                <p>{{$question[0]->pregunta_desc}}</p>
                <h2>Answers</h2>
                <br/>
                <div>
                    <a href="/Respuesta/{{$question[0]->id}}/create"><input type="button"  class="btn btn_crear waves-effect waves-light" value="Answer"></a>
                    @foreach($answersList as $list)
                    <div class="respuesta question myquestions z-depth-1">
                        <div class="izq">
                            <span>{{$list->fecha}}</span>
                            <span>From {{$list->name}}</span>
                            <p class="disabled">{{$list->respuesta}}</p>
                        </div>
                        @if($list->email == Auth::user()->email)
                        <div class="der">
                            <form action="/Respuesta/{{$list->id}}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                {!! method_field('DELETE') !!}
                                <button type="submit" ><i class="mdi-action-delete"></i></button>
                            </form>
                            <a class="edit_btn" href="/Respuesta/{{$question[0]->id}}/{{$list->id}}/edit"><i class="mdi-editor-mode-edit"></i></a>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop