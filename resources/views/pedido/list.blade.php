@extends('layouts.app')

@section('title', 'Pedidos')

@section('content')

     <example-component></example-component>
  {{-- <main role="main">
      <div class="container marketing">
          <div class="row align-items-center">
        @foreach ($productos as $key => $producto)
          <div class="col-lg-4">
              <br>
            <div class="card" style="width: 18rem;">
              <img style="height: 150px; width: 150px;margin: 20px" src="images/{{ $producto->imagen }}"class="card-img-top rounded-circle mx-auto d-block" >
              <div class="card-body">
                <h5 class="card-title">{{ $producto->nombre }}</h5>
                <p class="card-text"><p>{{ $producto->descripcion }}</p></p>
                <a href="/productos/{{ $producto->id }}" class="btn btn-primary">ver mas</a>
              </div>
            </div>
        </div>
        @endforeach
        </div>

      </div>
  </main>
 --}}
  @endsection
