@extends('layouts.plantilla')
 
@section('title', 'Diario / Recuerdos')


@section('contenido')

<h1 class="display-1 text-dark text-center mt-4">Recuerdos</h1>

@foreach ($consultaRecuerdos as $item)
<div class='container px-5 mt-3'>

    <div class="card mb-3">
      <div class="card-header fs-4 text-primary text-center">
        Tu Recuerdo...
      </div>
      <div class="card-body text-center">
        <p class="card-text fs-5">{{$item->titulo}}</p>
        <p class="card-text fs-5">{{$item->fecha}}</p>
        <p class="card-text fs-5">{{$item->recuerdo}}</p>
        
        <div class='mb-2 d-grid mx-auto'>
          <button type='button' class='btn btn-outline-success' data-bs-target='#editar{{ $item->id }}' data-bs-toggle='modal'>
            Editar
          </button>
        </div>

        <div class='mb-2 d-grid mx-auto'type='button' class='btn btn-primary'>
          <button type='button' class='btn btn-outline-success'>
            Eliminar
          </button>
        </div>

      </div>
    </div>

    @include('partials.modal')

@endforeach

</div>


@endsection