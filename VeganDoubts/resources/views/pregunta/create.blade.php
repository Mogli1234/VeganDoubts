@extends('layouts.app')
@section('content')
<div class="row">
        <div class="x_panel">
            <div class="x_title">
                <h2>New question</h2>
            </div>
            <div class="x_content">
                <br />
                <form method="POST" action="/Pregunta" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>Tittle</label>
                        <input type="text" name="titulo">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea id="textarea1" class="materialize-textarea" length="255" name="descripcion"></textarea>
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
                      <div class="switch" id="check">
                          <label>Subcategory</label>
                          <label>
                              No
                              <input id="check_sub" type="checkbox">
                              <span class="lever"></span>
                              Yes
                          </label>
                      </div>
                      <div id="subcategory">
                          <select name="sub_categoria_id" id="sub_categoria_id">
                              @foreach($subCategoria as $sub_cat)
                                  <option value="{{$sub_cat->id}}">{{$sub_cat->sub_categoria}}</option>
                              @endforeach
                          </select>
                      </div>
                    </div>
                <input type="submit" class="btn btn_crear waves-effect waves-light" value="Save" id="crear_pregunta">
            </form>
        </div>
      </form>
    </div>
  </div>
</div>
@stop