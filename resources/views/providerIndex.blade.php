@extends('template')
@section('content')

<div class="d-flex justify-content-center"><h1 class="mt-3" style="color: #033E8C">Provider Index</h1></div>

<div class="d-flex justify-content-end"><a href="" class="btn btn-warning mt-1 mx-5 text-white p-2">Add Item</a></div>
    

<div class="d-flex justify-content-center m-3 flex-wrap">
    {{-- @foreach ($selectCustomer as $consulta) --}}
        @csrf
        {!! method_field('PUT') !!}
        <div class="card bg-light m-3 rounded-lg border-gray border-2" style="width:90%;">
            <div class="d-flex justify-content-start p-3 flex-wrap align-items-center">
                <div class="text-center" style="width: 40%">
                    <img src="https://tiendapanini.com.mx/static/version1669949325/frontend/Panini/Mexico/es_MX/images/panini-logo.svg"
                        alt="" width="100%">
                </div>

                <div style="width: 50%" class="m-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Name:    </b> </li>
                        <li class="list-group-item"><b>Email:   </b> </li>
                        <li class="list-group-item"><b>INE:     </b> </li>
                        <div class="card-body">
                            {{-- <a href="{{ route('book.edit', $consulta->Id_book) }}" class="btn btn-dark">Edit</a> --}}
                            <a href="" class="btn" style="color:white;background-color:#033E8C">Edit</a>
                            {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $consulta->Id_book }}">Delete</button> --}}
                            <button type="button" class="btn" style="background-color:#D90404;color:white" data-bs-toggle="modal" data-bs-target="">Delete</button>
                        </div>
                    </ul>
                </div>


            </div>
        </div>
    {{-- @endforeach --}}
</div>

@stop