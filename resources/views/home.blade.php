@extends('template')
@section('content')

    {{-- Inicio del carrusel --}}
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="1000">
                <img src="https://w.wallhaven.cc/full/zx/wallhaven-zxo1xw.jpg" class="d-block w-100"
                    style="height:610px; opacity: 0.4;">
                {{-- Inicio del contenedor --}}
                <div class="position-absolute top-50 end-50 translate-middle-y">
                    <h2 class="fw-bold">WEEKLY RELEASES</h2>
                    <h1 class="fw-bold">NEW COMICS THIS WEEK</h1>
                </div>
                {{-- Fin del contenedor --}}
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://w.wallhaven.cc/full/42/wallhaven-42llj9.jpg" class="d-block w-100"
                    style="height:610px; opacity: 0.4;">
                {{-- Inicio del contenedor --}}
                <div class="position-absolute top-50 end-50 translate-middle-y">
                    <h2 class="fw-bold">
                        ENJOY READING
                    </h2>
                    <h1 class="fw-bold">Weirdo Comics
                    </h1>
                </div>
                {{-- Fin del contenedor --}}
            </div>
            <div class="carousel-item">
                <img src="https://w.wallhaven.cc/full/nr/wallhaven-nr7wpw.png" class="d-block w-100"
                    style="height:610px; opacity: 0.4;">
                {{-- Inicio del contenedor --}}
                <div class="position-absolute top-50 end-50  translate-middle-y">
                    <h2 class="fw-bold">Weirdo Comics</h2>
                    <h1 class="fw-bold">BEST SELLING COMICS
                        K</h1>
                </div>
                {{-- Fin del contenedor --}}
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </button>
    </div>
    {{-- Fin del carrusel --}}

    {{-- contenido --}}
    <div class="text-center" style="background-color: #033E8C">
        <hr>
        <h1 class="text-white fw-bold">WEIRDO COMICS</h1><br>
        <h2 class="text-white fw-bold">Join the world of adventures with your favorite characters</h2>
        <hr>
    </div>
    {{-- contenido --}}
    <div class="text-center">
        <hr>
        <p>Comics give us the opportunity to be children again, to enter a fantasy world that can be really interesting.</p>
        <hr>
    </div>

    {{-- Baner --}}
    <div class="h-10 mb-5 position-relative" style="background-color: #033E8C">
        <img src="https://static.dc.com/2022-06/DC_Peacemaker_RegBan_cutout.png?w=700" class="w-25" alt="">
        <h5 class="text-white position-absolute top-50 start-50 translate-middle">Register for FREE to access
            member-exclusive content and activities, read FREE comics from DC UNIVERSE INFINITE, and get alerts and early
            access to exclusive products from DC Shop! </h5>
    </div>
    {{-- Baner --}}

    {{-- Info --}}
    <div class="container d-flex justify-content-evenly mb-4">
        <div class="picture row mx-4">
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/Marvel_Logo.svg" class="w-50 " alt="">
        </div>
        <div class="data w-50">
            <h1>INFORMATION</h1>
            <p>For digital comics, all purchases in the Marvel Comics app can be read on iPhone®, iPad® and select Android™
                devices! Our smart-paneling feature provides an intuitive reader experience, ideal for all types of mobile
                device and tablet users! Download the app on iOS and Android now!</p>
        </div>
    </div>
    {{-- Info --}}

@stop
