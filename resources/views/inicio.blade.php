@extends('layouts.plantilla')
 
@section('title', 'Welcome')


@section('contenido')

<h1 class="display-1 text-success">Bienvenido en al inicio</h1>

<div class="card" style="width: 18rem;">
  <img src="https://laravel.com/img/logotype.min.svg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card de bootstrap</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

@endsection
