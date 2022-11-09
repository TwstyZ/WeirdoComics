@section('contenidoMenu')
@extends('plantillamenu')
{{-- Container para dos elementos, checar el doc --}}
<div class="container">
<br>
    <div class="row justify-content-center">
      {{-- Buscador tipo input (por ahora) --}}
      <div class="row justify-content-center">
        <div class="col-5">
          <label for="exampleDataList" class="form-label">Buscador</label>
          <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
          <datalist id="datalistOptions">
            <option value="San Francisco">
            <option value="New York">
            <option value="Seattle">
            <option value="Los Angeles">
            <option value="Chicago">
        </div>
      </div>
    </div>
<br>
{{-- cards para desplegar los productos que se van a vender al cliente en mostrador --}}
{{-- Por el momento son 4 cards para demostrar como se veria, solo es --}}
    <div class="row justify-content-center">
      <div class="col-2">
        <div class="card" style="width: 12rem;">
          <img src="https://i1.whakoom.com/large/18/36/5366994b1ec04efeb7ba87eddb39bae1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    <div class="col-1"></div>

    <div class="col-2">
      <div class="card" style="width: 12rem;">
        <img src="https://i1.whakoom.com/large/18/36/5366994b1ec04efeb7ba87eddb39bae1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  <div class="col-1"></div>

  <div class="col-2">
    <div class="card" style="width: 12rem;">
      <img src="https://i1.whakoom.com/large/18/36/5366994b1ec04efeb7ba87eddb39bae1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
<div class="col-1"></div>

<div class="col-2">
  <div class="card" style="width: 12rem;">
    <img src="https://i1.whakoom.com/large/18/36/5366994b1ec04efeb7ba87eddb39bae1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
<div class="col-1"></div>

    </div>
    <br>
    <div class="row justify-content-center">
      <a type="button" class="btn btn-success" style="border-radius: 10px; " href="{{route('v')}}">Registrar pedido</a>
    </div>
    <br>
</div>



@stop