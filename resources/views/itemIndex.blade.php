@extends('template')
@section('content')

<div class="d-flex justify-content-center"><h1 class="mt-3" style="color: #033E8C">Item Index</h1></div>
<div class="d-flex justify-content-center">
    Aqui va la barra de busqueda @Ulises rifate
</div>

<div class="d-flex justify-content-end"><a href="" class="btn btn-warning mt-1 mx-5 text-white p-2">Add Item</a></div>
    







    <div class="d-flex justify-content-center m-3 flex-wrap">
        {{-- @foreach ($selectBook as $consulta) --}}
            @csrf
            {!! method_field('PUT') !!}
            <div class="card bg-light m-3 rounded-lg border-gray border-2" style="width: 18rem;">
                <div class="d-flex justify-content-center px-2 py-3">
                    {{-- Esta imagen deberá estar en un if de la cantidad del articulo, si esta es 0
                        poner una imagen de alerta, sino, poner la imagen del articulo --}}

                        {{-- La imagen del articulo será la que está en la BD por lo que se debe de imprimir --}}
                    <img src="" alt="" width="40%">
                </div>
                <div class="card-body">
                    {{-- Aqui va el nombre del comic --}}
                    <h5 class="card-title text-center mb-1"></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Type:            </b></li>
                    <li class="list-group-item"><b>Company:         </b></li>
                    <li class="list-group-item"><b>Description:     </b></li>
                    <li class="list-group-item"><b>Amount:          </b></li>
                    <li class="list-group-item"><b>Price sell:      </b></li>
                    <li class="list-group-item"><b>Price buy:       </b></li>
                    <li class="list-group-item"><b>Adimssion date:  </b></li>
                </ul>
                <div class="card-body">
                    {{-- <a href="{{ route('book.edit', $consulta->Id_book) }}" class="btn btn-dark">Edit</a> --}}
                    <a href="" class="btn" style="color:white;background-color:#033E8C">Edit</a>
                    {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $consulta->Id_book }}">Delete</button> --}}
                    <button type="button" class="btn" style="background-color:#D90404;color:white" data-bs-toggle="modal" data-bs-target="">Delete</button>
                </div>
            </div>

            {{-- @endforeach --}}
    </div>

@stop