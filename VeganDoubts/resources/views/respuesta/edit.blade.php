@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Answer</h2>
            </div>
            <div class="x_content">
                <br />
                <form method="POST" action="/Respuesta/{{$respuesta_edit[0]->id}}" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="pregunta_id" value="{{$pregunta_data[0]->id}}">
                    <div class="form-group">
                        <label>Answer</label>
                        <textarea length="255" id="textarea1" class="materialize-textarea" name="respuesta">{{$respuesta_edit[0]->respuesta}}</textarea>
                    </div>
                    <input type="submit" class="btn btn_crear waves-effect waves-light" value="Override">
                    <a href="/Pregunta/{{$pregunta_data[0]->id}}"><input type="button"  class="btn btn_crear waves-effect waves-light" value="Cancel"></a>
                </form>
            </div>
        </div>
    </div>
@endsection