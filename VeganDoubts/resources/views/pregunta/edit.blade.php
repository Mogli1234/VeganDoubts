@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit question</h2>
            </div>
            <div class="x_content">
                <br />
                <form method="POST" action="/Pregunta/{{$question[0]->id}}" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label>Tittle</label>
                        <input type="text" name="titulo" value="{{$question[0]->pregunta_titulo}}">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea id="textarea1" class="materialize-textarea" name="descripcion">{{$question[0]->pregunta_desc}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="categoria_id">
                            @foreach($categorias as $cat)
                                <option value="{{$cat->id}}">{{$cat->categoria}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                      <div class="switch">
                          <label>Subcategory</label>
                          <label>
                              No
                              <input id="check_sub" type="checkbox">
                              <span class="lever"></span>
                              Yes
                          </label>
                      </div>
                      <div id="subcategory">
                          <p>
                              <input name="group1" type="radio" id="test1" />
                              <label for="test1">One</label>
                          </p>
                          <p>
                              <input name="group1" type="radio" id="test2" />
                              <label for="test2">Two</label>
                          </p>
                          <p>
                              <input class="with-gap" name="group1" type="radio" id="test3"  />
                              <label for="test3">Three</label>
                          </p>
                          <p>
                          <input class="with-gap" name="group1" type="radio" id="test4" />
                            <label for="test4">Four</label>
                        </p>
                    </div>
                </div>

                <input type="submit" class="btn btn_crear waves-effect waves-light" value="Save">
            </form>
        </div>
    </div>
</div>
</div>
@stop