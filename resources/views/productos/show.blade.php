@extends('layouts.base')

@section('title', 'Producto')

@section('content')
    <br>
    <br>
    <br>
    <br>
  <main role="main">
      <div class="container marketing">
          <div class="row align-items-center">
              <div class="col-lg-12 text-center">
                  @include('common.save')
                  <br>
                  <img style="height: 150px; width: 150px;margin: 20px" src="/images/{{ $producto->imagen }}"class="card-img-top rounded-circle mx-auto d-block" >
                  <div class="card-body">
                    <h5 class="card-title">{{ $producto->nombre }}</h5>
                    <p class="card-text"><p>{{ $producto->descripcion }}</p></p>
                    <a href="/productos/{{ $producto->id }}/edit" class="btn btn-primary">Editar</a>
                    <br>
                    <br>
                    {!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                  </div>
            </div>
        </div>
      </div>
  </main>

  @endsection
