@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{$pregunta_data[0]->pregunta_titulo}}</h2>
            </div>
            <div class="x_content">
                <br />
                <form method="POST" action="/Respuesta" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="pregunta_id" value="{{$pregunta_data[0]->id}}">
                    <div class="form-group">
                        <label>Answer</label>
                        <textarea id="textarea1" class="materialize-textarea" length="255" name="respuesta"></textarea>
                    </div>
                    <input type="submit" class="btn btn_crear waves-effect waves-light" value="Save">
                    <a href="/Pregunta/{{$pregunta_data[0]->id}}"><input type="button"  class="btn btn_crear waves-effect waves-light" value="Cancel"></a>
                </form>
            </div>
        </div>
    </div>
@endsection