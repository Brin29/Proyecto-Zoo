@extends('layout')
@section('contenido')
<div class="container">
  <div class="row">

  @if ($message = Session::get('success'))
  <div class="alert alert-succes" role="alert">
    {{message}}
  </div>
  @endif
  @if ($message = Session::get('alert'))
  <div class="alert alert-danger" role="alert">
    {{message}}
  </div>
  @endif

  <h4 class="text-center">Nuestros Animales</h4>
  <hr>
    @foreach($animales as $animal)
      <div class="col-md-4">
        <div class="card">
          <!-- <img class="card-img-top" src="{{ asset('img/'. $animal->imagen) }}" alt="Card image cap"> -->
          <div class="card-body">
            <h5 class="card-title text-center">{{ $animal->nombre }}</h5>
            <p class="card-text">Edad: {{ $animal->tipo }}</p>
            <p class="card-text">Tamaño: {{ $animal->genero }}</p>
            <p class="card-text">{{ $animal->informacion }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection