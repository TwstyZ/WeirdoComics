@section('contenidoMenu')
@extends('plantillamenu')
{{-- Container para tres elementos, checar en el doc que se hizo --}}
<div class="container">
    <br>
    {{-- banner para comics (verde) y articulos --}}
    <div class="row justify-content-center">
      <div class="col-auto">
        <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-success ">Comic's</button>
          <button type="button" class="btn btn-outline-primary">Articulos</button>
        </div>
      </div>
      
    </div>
    <br>
    {{-- Buscador tipo input (por ahora) --}}
    <div class="row justify-content-center">
      <div class="col-3">
        <label for="exampleDataList" class="form-label">Buscador</label>
        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
        <datalist id="datalistOptions">
          <option value="San Francisco">
          <option value="New York">
          <option value="Seattle">
          <option value="Los Angeles">
          <option value="Chicago">
        </datalist>
      </div>  
    </div>
    <br>
    {{-- cards para poner en pantalla los comics relevantes, cambiar texto y titulo de cada card --}}
    <div class="row justify-content-center">
        
        <div class="col-auto">
            <div class="card" style="width: 14rem;">
                <img src="https://i1.whakoom.com/large/18/36/5366994b1ec04efeb7ba87eddb39bae1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
        <div class="col-auto">
            <div class="card" style="width: 14rem;">
                <img src="https://i1.whakoom.com/large/18/36/5366994b1ec04efeb7ba87eddb39bae1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
    </div>
    <br>
</div>




@stop