@extends('layouts.layout')

@section( 'main')
<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>
    @media(max-width: 500px) {
        .reverse-columns {
            flex-direction: column-reverse;
            display: flex;
        }
    }

    .titled {
        font-family: 'Merriweather', serif !important;
        font-size: 58px !important;
        font-weight: 400 !important;
        line-height: 64px !important;
    }

    .subtitled {
        font-family: 'Merriweather', serif !important;
        font-size: 22px !important;
        font-weight: 400 !important;
        line-height: 36px !important;
    }

</style>
<!-- NavBar va a todo lo ancho -->
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <img src="/assets/img/ar2design.png" width="112" height="28">
        </a>
    </div>

    <div class="navbar-menu">

        <div class="navbar-end">
            <a class="navbar-item">
                WHY?
            </a>

            <a class="navbar-item">
                BUY
            </a>

            <a class="navbar-item">
                ILLUSTRATION SERIES
            </a>

            <a class="navbar-item">
                EXCLUSIVE ILLUSTRATIONS
            </a>

        </div>
    </div>
</nav>

<!-- Hero del producto -->
@foreach ($projects as $project)
<section class="hero is-white is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns  is-vcentered">
                <div data-aos="fade-left" class="column
            is-10-mobile is-offset-1-mobile
            is-10-tablet is-offset-1-tablet
            is-4-desktop is-offset-1-desktop
            is-4-widescreen is-offset-1-widescreen
            is-4-fullhd is-offset-1-fullhd">
                    <figure class="image is-square">
                        <img
                            src="{{$project->image('screengrab_desktop', 'default', ['w'=>900,'fit'=>null])}}" 
                        >
                    </figure>
                </div>
                <div data-aos="fade-down" class="column
            is-10-mobile is-offset-1-mobile
            is-10-tablet is-offset-1-tablet
            is-5-desktop is-offset-1-desktop
            is-5-widescreen is-offset-1-widescreen
            is-5-fullhd is-offset-1-fullhd">
                    <h1 class="titled title is-1 mb-6">
                        Hello-
                    </h1>
                    <h2 class="subtitled subtitle">
                        <p>This is user </p>
                    </h2>
                </div>

            </div>
        </div>
    </div>
</section>
@endforeach

<section class="hero is-medium has-text-centered">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div data-aos="zoom-in-up" class="column is-8">
                    <h1 class="title titled is-1 mb-6">
                        Primary bold title <span id="typewriter"></span>
                    </h1>
                    <h2 class="subtitle subtitled">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum cupiditate dolorum vitae
                        dolores
                        nesciunt totam magni quas.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </h2>
                </div>
            </div>

        </div>
    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/2.13.1/core.min.js"></script>
<script>
    new Typewriter('#typewriter', {
        strings: ['typewriter', 'Effect', 'typewriter.js', 'example'],
        autoStart: true,
        loop: true,
    });

</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        once: true
    });

</script>
@endsection
