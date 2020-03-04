@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')

  <main role="main">
      <div class="container marketing">
          <div class="row align-items-center">
            <div class="col-lg-12">
            @include('common.error')
            <form class="form-group" method="POST" action="/productos" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombreP">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcionP" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Imagen</label>
                    <input type="file" class="" name="imagen" id="imagen" >
                  </div>
                  <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
            </div>
          </div>
      </div>
  </main>

  @endsection
