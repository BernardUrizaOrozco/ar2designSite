@extends('layouts.layout')

@section( 'content')
<link rel="stylesheet" type="text/css" href="../assets/css/index.css">
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <!-- Wrapper -->
    <div id="wrapper" class="has-text-centered-mobile">
        ESTOS SON LOS PROYECTOS
        <div class="content">
            Lista
            <div class="col">
                {{ $name }} {{ $description }}
            </div>
        </div>
    </div>
    <!-- END Wrapper -->
</div>
@endsection
