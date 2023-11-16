@extends('layouts.plantilla')
 
@section('title', 'Diario / Recuerdos')


@section('contenido')

<h1 class="display-1 text-dark text-center mt-4">Recuerdos</h1>

<div class='container px-5 mt-3'>

  @foreach ($consultaRecuerdos as $recuerdo)
    <div class="card">
      <div class="card-header fs-4 text-primary text-center">
        Tu Recuerdo...
      </div>
      <div class="card-body text-center">
        <p class="card-text fs-5">{{$recuerdo->titulo}}</p>
        <p class="card-text fs-5">{{$recuerdo->fecha}}</p>
        <p class="card-text fs-5">{{$recuerdo->recuerdo}}</p>
        
        <div class='mb-2 d-grid mx-auto'>
          <a href="#" class="btn btn-outline-success">Editar</a>
        </div>

        <div class='mb-2 d-grid mx-auto'>
          <a href="#" class="btn btn-outline-success">Eliminar</a>
        </div>

      </div>
    </div>
  @endforeach

</div>


@endsection