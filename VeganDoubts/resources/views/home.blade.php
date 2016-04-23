@extends('layouts.app')

@section('content')
<div class="card cont_questions_home">
  <div class="x_title">
    <h2>Featured questions</h2>
  </div>
  <div class="question">
    <div class="izq">
      <h3 class="q_tittle"></h3>
      <span></span>
      <span><a href="#"></a></span>
    </div>
    <div class="der">
     <span class="q_views"></span>
     <span class="q_replies"></span>
   </div>
 </div>
</div>
<div class="card cont_questions_home">
  <div class="x_title">
    <h2>Recent questions</h2>
  </div>
  @foreach($preguntasList as $preList)
  <a href="/Pregunta/{{$preList->id}}">
    <div class="question question_home">
      <div class="izq">
        <h3 class="q_tittle">{{$preList->pregunta_titulo}}</h3>
        <span class="from">From {{$preList->name}}</span>
      </div>
      <div class="der">
       <span class="q_views">Views: 728</span>
       <span class="q_replies">Replies: 26</span>
     </div>
   </div>
 </a>
 @endforeach
</div>
@endsection
