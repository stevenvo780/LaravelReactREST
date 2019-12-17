@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <br>
    <br>
    <br>
    <br>
  <main role="main">
      <div class="container marketing">
          <div class="row align-items-center">
            <div class="col-lg-12">
            <form class="form-group" method="POST" action="/productos">
                @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="correo" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="contraseña" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
          </div>
      </div>
  </main>

  @endsection
