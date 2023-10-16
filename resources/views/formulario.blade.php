@extends('layouts.plantilla')
 
@section('title', 'Vista 2')


@section('contenido')

<h1 class="display-1 text-success text-center mt-5">Formulario</h1>

<div class='container mt-5'>

  <div class="card">
    <div class="card-header text-primary text-center fs-4">
      Introduce tus recuerdos aqui ...
    </div>
    <div class="card-body text-center">
      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Titulo</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Recuerdos</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>   
    </div>
    <div class="card-footer text-body-secondary">
        <div class="d-grid gap-2 col-6 mx-auto">
          <button class="btn btn-success" type="button">Guardar</button>
        </div>
      </form>
    </div>
  </div>

</div>



@endsection