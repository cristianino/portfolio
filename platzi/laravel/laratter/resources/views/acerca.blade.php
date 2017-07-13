@extends('layouts.app')
@section('title')
Acerca de nosotros
@endsection
@section('content')
<div class="title m-b-md">
    Acerca de Laratter
    <!--Las '{''{''}''}' son para mostrar variables ya definidas-->
    <p>Hola {{$nombre}}</p>
</div>
@if (isset($teacher))
<p>Profesor: {{$teacher}}</p>
@else
<p>Profesor a definir</p>
@endif
<div class="links">
  @foreach($links as $link =>$text)
    <a href="{{$link}}">{{$text}}</a>
  @endforeach
</div>
@endsection
