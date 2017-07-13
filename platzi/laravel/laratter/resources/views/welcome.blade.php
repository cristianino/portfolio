@extends('layouts.app')
@section('title')
Inicio | Laratter
@endsection
@section('content')
<div class="jumbotron text-center">
  <h1>Laratter</h1>
  <nav >
    <ul class="nav nav-pills">
      <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
    </ul>
  </nav>
</div>
<div class="row">
  @forelse($messages as $message)
    <div class="col-6">
      <img class="img-thumb" src="{{$message['image']}}">
      <p class="card-text">
        {{$message['contenido']}}
        <a href="/messages/{{$message['id']}}">Leer mas</a>
      </p>
    </div>
  @empty
    <p>No hay mensajes destacados</p>
  @endforelse
</div>
@endsection
