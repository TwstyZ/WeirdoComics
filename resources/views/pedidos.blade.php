@section('contenidoMenu')
@extends('plantillamenu')
{{-- Container para dos elementos, checar el doc --}}
<br>
<div class="container">
  <div class="row justify-content-center">
      <div class="col-auto">
        <img src="https://www.cdc.gov/preconception/spanish/images/man-with-arms-crossed.jpg" class="rounded float-start"  width="250" height="250" alt="...">
      </div>  
      <div class="col-4">
        <br>
        <ul class="list-group">
          <li class="list-group-item ">Empresa...</li>
          <li class="list-group-item ">Producto...</li>
          <li class="list-group-item ">Precio...</li>
          <li class="list-group-item ">Cantidad...</li>
        </ul>
      </div>  
      <div class="col-2">
        <br>
        <br>
        <div class="container">
          <div class="row">
          </div>
          <br>
          <div class="row">
            <button type="button" class="btn btn-danger" style="border-radius: 10px;">Ordenar</button>
          </div>
          <br>
          <div class="row">
          </div>
          <br>
        </div>
      </div>  
  </div>
  <hr size="5px" color="black" />
<div class="row justify-content-center">
    <div class="col-auto">
      <img src="https://www.cdc.gov/preconception/spanish/images/man-with-arms-crossed.jpg" class="rounded float-start"  width="250" height="250" alt="...">
    </div>  
    <div class="col-4">
      <br>
      <ul class="list-group">
        <li class="list-group-item ">Empresa...</li>
        <li class="list-group-item ">Producto...</li>
        <li class="list-group-item ">Precio...</li>
        <li class="list-group-item ">Cantidad...</li>
      </ul>
    </div>  
    <div class="col-2">
      <br>
      <br>
      <div class="container">
        <div class="row">
        </div>
        <br>
        <div class="row">
          <button type="button" class="btn btn-danger" style="border-radius: 10px;">Ordenar</button>
        </div>
        <br>
        <div class="row">
        </div>
        <br>
      </div>
    </div>  
</div>
<hr size="5px" color="black" />
</div>



@stop