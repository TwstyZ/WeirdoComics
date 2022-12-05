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
                    <h2 class="fw-bold">WEEKLY RELEASES</h2>
                    <h1 class="fw-bold">NEW COMICS THIS WEEK</h1>
                </div>
                {{-- Fin del contenedor --}}
            </div>
            <div class="carousel-item">
                <img src="https://w.wallhaven.cc/full/nr/wallhaven-nr7wpw.png" class="d-block w-100"
                    style="height:610px; opacity: 0.4;">
                      {{-- Inicio del contenedor --}}
                <div class="position-absolute top-50 end-50 translate-middle-y">
                    <h2 class="fw-bold">WEEKLY RELEASES</h2>
                    <h1 class="fw-bold">NEW COMICS THIS WEEK</h1>
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


@stop
