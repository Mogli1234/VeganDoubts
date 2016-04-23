@extends('layouts.app')

@section('content')
<div class="card cont_questions_home">
    <div class="x_title">
        <h2>My Questions</h2>
    </div>
    @foreach($preguntasList as $preList)
    <div class="question myquestions">
        <div class="izq">
            <h3 class="q_tittle">{{$preList->pregunta_titulo}}</h3>
            <a href="/Pregunta/{{$preList->id}}">See more</a>
        </div>
        <div class="der">
            <form action="/Pregunta/{{$preList->id}}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {!! method_field('DELETE') !!}
                <button type="submit" ><i class="mdi-action-delete"></i></button>
            </form>
            <a class="edit_btn" href="/Pregunta/{{$preList->id}}/edit"><i class="mdi-editor-mode-edit"></i></a>
        </div>
    </div>
    @endforeach
</div>
@endsection