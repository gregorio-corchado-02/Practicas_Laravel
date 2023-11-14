@extends('layouts.plantilla')
 
@section('title', 'DIARIO-FORMULARIO')


@section('contenido')

  <h1 class="display-1 text-dark text-center mt-4">Formulario</h1>

  <div class='container mt-4 px-5'>

    @if(session()->has('confirmacion'))

    <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
      <strong> {{ session('confirmacion') }} </strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif

    @if($errors->any())

    @foreach ($errors->all() as $error)

    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
      <strong> {{ $error }} </strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endforeach

    @endif

    <div class="card ">
      <div class="card-header text-primary text-center fs-4">
        Introduce tus recuerdos aqui ...
      </div>
      <div class="card-body text-center">
        <form method="POST" action="/recuerdo">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titulo</label>
            <input type="text" name="txtTitulo" class="form-control" value="{{old('txtTitulo' )}}" >
            <p class="fw-bolder">{{ $errors->first('txtTitulo')}}</p>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Recuerdos</label>
            <input type="text" name="txtRecuerdos" class="form-control" value="{{old('txtRecuerdos')}}" >
            <p class="fw-bolder">{{ $errors->first('txtRecuerdos')}}</p>
          </div> 
      </div>
      <div class="card-footer text-body-secondary">
        <div class="d-grid mx-auto">
            <button class="btn btn-outline-success" type="submit">Guardar</button>
        </div>
        </form>  
      </div>
    </div>

  </div>



@endsection