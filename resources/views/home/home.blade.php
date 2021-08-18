@extends('base')
@section('title') Inicio @endsection
@section('content')
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
              <a class="navbar-brand" href="#">Hola
                {{-- <img src="../../resources/img/top-logo.svg" alt="" width="30" height="24"> --}}
              </a>
            </div>
        </nav>
    </header>
    <main class="container-fluid">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">¡Welcome!</h1>
            <p class="lead">This is.</p>
        </div>
    </main>
@endsection
