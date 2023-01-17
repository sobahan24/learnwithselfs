<div class="container">
    <div class="row py-1">
        <div class="col-md-3 my-auto d-none d-sm-block d-md-block">
            <a href="{{ url('/') }}">
                <img src="{{ asset("ui") }}/frontend/images/logo.png" class="main-logo-learnWithSelf" alt="Learn with Self" />
            </a>
        </div>
        <div class="col-md-9">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="{{ asset("ui") }}/frontend/images/slider/1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset("ui") }}/frontend/images/slider/2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset("ui") }}/frontend/images/slider/3.png" class="d-block w-100" alt="...">
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="main-menu-navbar navbar navbar-expand-lg navbar-light sticky-top bg-blue-nav">
    <div class="container">

        <a class="navbar-brand d-block d-sm-none d-md-none d-lg-none" href="index.html">
            <img src="{{ asset("ui") }}/frontend/images/logo.png" class="main-small-logo" alt="Learn with Self" />
        </a>

        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PHP
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('php') }}">PHP Tutorial</a>
                        <a class="dropdown-item" href="{{ url('php-oop') }}">PHP OOP Tutorial</a>
                        <a class="dropdown-item" href="{{ url('php-pdo') }}">PHP PDO Tutorial</a>
                        <a class="dropdown-item" href="{{ url('php-solutions') }}">PHP Solutions</a>
                        <a class="dropdown-item" href="{{ url('php-programs') }}">PHP Programs</a>
                        <a class="dropdown-item" href="{{ url('php-admin-panel') }}">PHP Admin Panel</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Laravel
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('laravel-5-8') }}">Laravel 5.8</a>
                        <a class="dropdown-item" href="{{ url('laravel-8') }}">Laravel 8</a>
                        <a class="dropdown-item" href="{{ url('laravel-tips') }}">Laravel Tips</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('sql') }}">SQL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('jquery') }}">jQuery</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        JavaScript
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Vanilla JavaScript</a>
                        <a class="dropdown-item" href="#">ES6</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Python
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Python Tutorial</a>
                        <a class="dropdown-item" href="#">Django</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        JAVA
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">JAVA Programs</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('git') }}">Git</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-nav px-3" href="#">COURSES</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
