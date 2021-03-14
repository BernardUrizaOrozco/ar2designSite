@extends('layouts.layout')

@section( 'content')
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

        <!-- Hero -->
        <section id="hero" class="hero is-medium">
            <div class="hero-head">
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-brand">
                            <a class="navbar-item">
                                <h3 class="logo has-text-green is-size-4">Fancy App</h3>
                            </a></div>

                        <div class="navbar-menu">

                            <div class="navbar-end">
                                <a class="a-menu is-size-7 navbar-item">
                                    home
                                </a>
                                <a class="a-menu is-size-7 navbar-item">
                                    about
                                </a>
                                <a class="a-menu is-size-7 navbar-item">
                                    features
                                </a>
                                <a class="a-menu is-size-7 navbar-item">
                                    contact
                                </a>
                            </div>
                        </div>
                        <span class="navbar-burger burger" data-target="navbarMenuHeroA">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                </nav>
            </div>
            <div class="hero-body">
                <div class="container">
                    <h1 class="has-text-green is-size-1 is-size-3-mobile">
                        An engaging headline
                    </h1>
                    <p class="has-text-green">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                        et justo duo dolores et ea rebum.
                    </p>
                    <button class="btn has-mustard-bg is-size-7 a-menu">
                        try it now
                    </button>
                </div>
            </div>
        </section>
        <!-- END Hero -->

        <!-- Twitter Feed -->
        <section id="twitter-feed" class="section has-white-mustard-gradient">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="box">
                            <article class="media">
                                <div class="media-left">
                                    <figure class="image is-64x64 ">
                                        <img src="assets/img/twitter-profile-guy.jpg" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                        <p>
                                            <strong>Some guy</strong> <small>@someguy</small> <small>5m</small>
                                            <br>
                                            Frist time I used @fancyapp, was like the first time I listened to The
                                            Beatles. Christmas came early, I guess.
                                        </p>
                                    </div>
                                    <nav class="level is-mobile">
                                        <div class="level-left">
                                            <a class="level-item" aria-label="reply">
                                                <span class="icon is-small">
                                                    <i class="fas fa-reply" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                            <a class="level-item" aria-label="retweet">
                                                <span class="icon is-small">
                                                    <i class="fas fa-retweet" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                            <a class="level-item" aria-label="like">
                                                <span class="icon is-small">
                                                    <i class="fas fa-heart" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </nav>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="column">
                        <div class="box">
                            <article class="media">
                                <div class="media-left">
                                    <figure class="image is-64x64 ">
                                        <img src="assets/img/twitter-profile-girl.jpg" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                        <p>
                                            <strong>Some girl</strong> <small>@somegirl</small> <small>5m</small>
                                            <br>
                                            Fancy App is the answer to all your problems, all praise the
                                            #fancyappgod!
                                        </p>
                                    </div>
                                    <nav class="level is-mobile">
                                        <div class="level-left">
                                            <a class="level-item" aria-label="reply">
                                                <span class="icon is-small">
                                                    <i class="fas fa-reply" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                            <a class="level-item" aria-label="retweet">
                                                <span class="icon is-small">
                                                    <i class="fas fa-retweet" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                            <a class="level-item" aria-label="like">
                                                <span class="icon is-small">
                                                    <i class="fas fa-heart" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </nav>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <p class="is-size-7 has-text-centered">See more at #fancyapp</p>
            </div>
        </section>
        <!-- END Twitter Feed -->

        <!-- Features -->
        <section id="features" class="section has-mustard-bg">
            <div class="container">
                <div class="columns reverse-row-order">
                    <div class="column">
                        <h3 class="is-size-3">
                            Open Source, all the way
                        </h3>
                        <p class="has-text-green paragraph">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                            accusam et justo duo dolores et ea rebum.
                        </p>
                    </div>
                    <div class="column">
                        <img class="feature-img" src="assets/img/feature1.png" alt="feature" />
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="columns">

                    <div class="column">
                        <img class="feature-img" src="assets/img/feature2.png" alt="feature" />
                    </div>
                    <div class="column">
                        <h3 class="is-size-3">
                            Second Exciting Feature</h3>
                        <p class="has-text-green paragraph">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                            accusam et justo duo dolores et ea rebum.
                        </p>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="columns reverse-row-order">

                    <div class="column">
                        <h3 class="is-size-3">
                            Third Feature, Wow</h3>
                        <p class="has-text-green paragraph">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                            accusam et justo duo dolores et ea rebum.
                        </p>
                    </div>
                    <div class="column">
                        <img class="feature-img" src="assets/img/feature3.png" alt="feature" />
                    </div>
                </div>
            </div>
        </section>
        <!-- END Features -->
        <!-- Newsletter -->
        <section id="newsletter" class="section">
            <div class="container">
                <h3 class="is-size-3">
                    Newsletter or Call to Action</h3>
                <p class="has-text-green">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                    ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                    dolores et ea rebum.
                </p>
                <div class="field newsletter-field">
                    <div class="control">
                        <input class="input newsletter-input" type="text" placeholder="mail@example.com">
                    </div>
                </div>
                <button class="btn has-mustard-bg is-size-7 a-menu">
                    sign up now
                </button>
            </div>
        </section>
        <!-- END Newsletter -->
        <!-- Footer -->
        <section id="footer" class="section has-green-bg">
            <div class="container has-text-centered">
                <a href="https://twitter.com/hellobetkowski" class="is-size-4 social-link">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://github.com/hellobetkowski" class="is-size-4 social-link">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://dev.to/betkowski" class="is-size-4 social-link">
                    <i class="fab fa-dev"></i>
                </a>
                <p class="has-text-white is-size-7">
                    Built with <i class="fas fa-heart"></i> and <a href="https://bulma.io">Bulma</a>, by <a
                        href="https://twitter.com/hellobetkowski">@hellobetkowski</a>
                </p>
            </div>
        </section>
    </div>
    <!-- END Wrapper -->
</div>
@endsection

@section ('main')
<section class="hero is-info is-bold">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title">
                Free Bulma Templates
            </h1>
            <h2 class="subtitle">
                Based on the <a href="http://bulma.io">Bulma</a> CSS Framework
            </h2>
            <a class="github-button" href="https://github.com/BulmaTemplates/bulma-templates" data-size="large"
                aria-label="View BulmaTemplates/bulma-templates on GitHub">View on Github</a>
            <a class="github-button" href="https://github.com/BulmaTemplates/bulma-templates" data-icon="octicon-star"
                data-size="large" data-show-count="true"
                aria-label="Star BulmaTemplates/bulma-templates on GitHub">Star</a>
            <a class="github-button" href="https://github.com/BulmaTemplates/bulma-templates/fork" data-size="large"
                data-show-count="true" aria-label="Fork BulmaTemplates/bulma-templates on GitHub">Fork</a>
        </div>
    </div>
</section>
<br>
<div class="container content-wrapper">
    <div class="columns is-multiline">
        <!-- admin -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Admin <small>(Light)</small></span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="plantilla/adminTemplate"><img src="assets/images/admin.png" alt="Admin template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="plantilla/adminTemplate" class="card-footer-item"><i class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/admin.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- band -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Band</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="plantilla/band"><img src="assets/images/band.png" alt="Band template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="plantilla/band" class="card-footer-item"><i class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/band.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- blog -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Blog</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="plantilla/blog"><img src="assets/images/blog.png" alt="Blog template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="plantilla/blog" class="card-footer-item"><i class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/blog.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- cards -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Cards</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="plantilla/cards"><img src="assets/images/cards.png" alt="Cards template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="plantilla/cards" class="card-footer-item"><i class="fas fa-search"></i>Prever</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/cards.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- cheatsheet -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Cheatsheet</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/cheatsheet.html"><img src="assets/images/cheatsheet.png"
                                alt="Cheatsheet template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/cheatsheet.html" class="card-footer-item"><i
                            class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/cheatsheet.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- cover -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Cover</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/cover"><img src="assets/images/cover.png" alt="Cover template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/cover" class="card-footer-item"><i class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/cover.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- forum -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Forum</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="plantilla/forum"><img src="assets/images/forum.png" alt="Hero template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="plantilla/forum" class="card-footer-item"><i class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/forum.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- hello parallax -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Hello Parallax</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/hello-parallax.html"><img src="assets/images/hello-parallax.png"
                                alt="Hello Parallax template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/hello-parallax.html" class="card-footer-item"><i
                            class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/hello-parallax.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>

        <!-- Ghost Blog Template -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Ghost Blog "Casper"</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/ghost-blog.html"><img src="assets/images/ghost-blog.png"
                                alt="Ghost Blog template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/ghost-blog.html" class="card-footer-item"><i
                            class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/ghost-blog.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- hero -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Hero</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/hero.html"><img src="assets/images/hero.png" alt="Hero template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/hero.html" class="card-footer-item"><i class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/hero.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!--inbox -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Inbox</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/inbox.html"><img src="assets/images/inbox.png" alt="Inbox template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/inbox.html" class="card-footer-item"><i class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/inbox.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- insta album -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Image Timeline</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/instaAlbum.html"><img src="assets/images/instaalbum.png"
                                alt="Landing template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/instaAlbum.html" class="card-footer-item"><i
                            class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/instaAlbum.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!--kanban -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Kanban</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/kanban.html"><img src="assets/images/kanban.png"
                                alt="Kanban template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/kanban.html" class="card-footer-item"><i class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/kanban.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Kanban.js</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/kanban[search].html"><img src="assets/images/kanban2.png"
                                alt="Kanban template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/kanban[search].html" class="card-footer-item"><i
                            class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/kanban[search].html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- landing -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Landing</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/landing.html"><img src="assets/images/landing.png"
                                alt="Landing template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/landing.html" class="card-footer-item"><i class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/landing.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- login -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Login</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/login.html"><img src="assets/images/login.png" alt="Login template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/login.html" class="card-footer-item"><i class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/login.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- modal cards -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Modal Cards</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/modal-cards.html"><img src="assets/images/modalcards.png"
                                alt="modal-cards template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/modal-cards.html" class="card-footer-item"><i
                            class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/modal-cards.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- neumorphic login -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Neumorphic Login</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/neumorphic-login.html"><img src="assets/images/neumorphic-login.png"
                                alt="modal-cards template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/neumorphic-login.html" class="card-footer-item"><i
                            class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/neumorphic-login.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- Personal/Portfolio template -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Portfolio</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/personal.html"><img src="assets/images/personal.png"
                                alt="personal portfolio template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/personal.html" class="card-footer-item"><i class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/personal.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- Personal/Portfolio template -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Showcase</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/showcase.html"><img src="assets/images/showcase.png"
                                alt="showcase portfolio template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/showcase.html" class="card-footer-item"><i class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/showcase.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- register template -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Registration Form</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/register.html"><img src="assets/images/register.png"
                                alt="register template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/register.html" class="card-footer-item"><i class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/register.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- tabs -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Tabs</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/tabs.html"><img src="assets/images/tabs.png" alt="tabs template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/tabs.html" class="card-footer-item"><i class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/tabs.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- Contact Page -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Contact Page</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/contact.html"><img src="assets/images/contact.png"
                                alt="tabs template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/contact.html" class="card-footer-item"><i class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/contact.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- Blog 2 Page -->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Blog 2</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.0">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.0</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="templates/blog-tailsaw.html"><img src="assets/images/blog2.png"
                                alt="tabs template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="templates/blog-tailsaw.html" class="card-footer-item"><i
                            class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/blog-tailsaw.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- Absurd Designs Clone-->
        <div class="column is-4-desktop is-3-widescreen is-half-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span>Absurd.design Landing</span>
                        <span class="is-pulled-right">
                            <a href="https://github.com/jgthms/bulma/releases/tag/0.9.1">
                                <span class="tag is-default is-primary" title="Current Version">v0.9.1</span>
                            </a>
                            <span class="tag is-default is-info"><i class="fas fa-desktop"
                                    title="Desktop Support"></i></span>
                            <span class="tag is-default is-info"><i class="fas fa-mobile-alt"
                                    title="Mobile Support"></i></span>
                        </span>
                    </p>
                </header>
                <div class="card-content">
                    <figure class="image">
                        <a href="plantilla/absurd"><img src="assets/images/absurd2.png"
                                alt="tabs template screenshot"></a>
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="plantilla/absurd" class="card-footer-item"><i class="fas fa-search"></i>Preview</a>
                    <a href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/absurd.html"
                        class="card-footer-item"><i class="fas fa-code"></i>Source Code</a>
                </footer>
            </div>
        </div>
        <!-- coming soon -->
        <div class="column">
            <center>
                <div class="box">
                    <p class="has-text-centered">More templates are waiting for you to make them! So, give it a go.</p>
                </div>
            </center>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                <strong>Bulma Templates</strong> by <a href="https://github.com/dansup">Daniel Supernault</a> and <a
                    href="https://github.com/BulmaTemplates/bulma-templates/graphs/contributors">many</a> contributors.
                The Source Code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
            </p>
            <p>
                <a class="icon" href="https://github.com/BulmaTemplates/bulma-templates">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                </a>
            </p>
        </div>
    </div>
</footer>
<script src="https://kit.fontawesome.com/7dc3015a44.js" crossorigin="anonymous"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
@endsection
