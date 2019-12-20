<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Favicons -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top bg-dark">
          <a class="navbar-brand" href="/index">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
            @auth
                <li class="nav-item active">
                    <a class="nav-link" href="/productos">Productos</a>
                </li>
                {{-- @auth('ROLE_ADMIN') --}}
                    <li class="nav-item active">
                        <a class="nav-link" href="/productos/create">Añadir producto</a>
                    </li>
                {{-- @endauth --}}

            @endauth

            </ul>
            @if (Auth::user())
                <p style="color:ffffff";>{{ Auth::user()->name }}</p>
                &nbsp
                &nbsp
                <div class="">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                        @csrf
                        <button class="btn btn-success" type="submit" name="button">logout</button>
                    </form>
                  </div>
                </div>
            @else
                <div class="">
                  <a class="btn btn-success" href="/login">Login <span class="sr-only">(current)</span></a>
                </div>
                &nbsp
                &nbsp
                <div class="">
                  <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                </div>
            @endif


        </nav>
    </header>
    <div id="app">
        @yield('content')
    </div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
</body>
</html>
