@section('contenidoMenu')
    @extends('plantillamenu')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://i.annihil.us/u/prod/marvel/i/mg/2/d0/636a02a3563b6.jpg"
                    alt="First slide" style="width:150px;height:560px; opacity: 0.4;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://i.annihil.us/u/prod/marvel/i/mg/e/80/63607276b7988.jpg"
                    alt="Second slide" style="width:150px;height:560px; opacity: 0.4;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://i.annihil.us/u/prod/marvel/i/mg/4/10/636071a8e99f3.jpg"
                    alt="Third slide" style="width:150px;height:560px; opacity: 0.4;">
            </div>
        </div>
    </div>
    <div class="container " style="width:500px; height:150px; position:fixed; left:800px; top:400px;">
        <h3 class="fw-bolder" style="color: red">WEEKLY RELEASES</h3>
        <h1 class="font-monospace fw-bold">NEW COMICS THIS WEEK</h1>
        <br>
        <div class="d-grid gap-2 col-6 mx-auto">
            <form action="{{route('c')}}">
                <button type="submit"class="btn btn-primary" style="width: 200px" type="button">Entrar</button>
            </form>

        </div>
    </div>
@stop
