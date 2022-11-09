@section('contenidoMenu')
@extends('plantillamenu')
{{-- Container para dos elementos, checar el doc --}}
<br>
<div class="container">
  <div class="row justify-content-center">
      <div class="col-auto">
        <img src="https://www.cdc.gov/preconception/spanish/images/man-with-arms-crossed.jpg" class="rounded float-start"  width="300" height="300" alt="...">
      </div>  
      <div class="col-4">
        <ul class="list-group">
          <li class="list-group-item ">Empresa...</li>
          <li class="list-group-item ">Direccion...</li>
          <li class="list-group-item ">Pais...</li>
          <li class="list-group-item ">Contacto...</li>
          <li class="list-group-item ">Numero Fijo...</li>
          <li class="list-group-item ">Numero Celular...</li>
          <li class="list-group-item ">Correo...</li>
        </ul>
      </div>  
      <div class="col-2">
        <br>
        <br>
        <div class="container">
          <div class="row">
            <button type="button" class="btn btn-success" style="border-radius: 10px;">Consulta</button>
          </div>
          <br>
          <div class="row">
            <button type="button" class="btn btn-primary" style="border-radius: 10px;">Editar</button>
          </div>
          <br>
          <div class="row">
            <button type="button" class="btn btn-danger" style="border-radius: 10px;">Borrar</button>
          </div>
          <br>
        </div>
      </div>  
  </div>
<br><hr size="5px" color="black" />
<div class="row justify-content-center">
  <div class="col-auto">
    <img src="https://www.cdc.gov/preconception/spanish/images/man-with-arms-crossed.jpg" class="rounded float-start"  width="300" height="300" alt="...">
  </div>  
  <div class="col-4">
    <ul class="list-group">
      <li class="list-group-item ">Empresa...</li>
      <li class="list-group-item ">Direccion...</li>
      <li class="list-group-item ">Pais...</li>
      <li class="list-group-item ">Contacto...</li>
      <li class="list-group-item ">Numero Fijo...</li>
      <li class="list-group-item ">Numero Celular...</li>
      <li class="list-group-item ">Correo...</li>
    </ul>
  </div>  
  <div class="col-2">
    <br>
    <br>
    <div class="container">
      <div class="row">
        <button type="button" class="btn btn-success" style="border-radius: 10px;">Consulta</button>
      </div>
      <br>
      <div class="row">
        <button type="button" class="btn btn-primary" style="border-radius: 10px;">Editar</button>
      </div>
      <br>
      <div class="row">
        <button type="button" class="btn btn-danger" style="border-radius: 10px;">Borrar</button>
      </div>
      <br>
    </div>
  </div>  
</div>
<hr size="5px" color="black" />
</div>



@stop