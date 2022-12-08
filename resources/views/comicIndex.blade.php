@extends('template')
@section('content')
@include('comicDelete')


@if (session()->has('Eliminado'))
    {!! "<script>Swal.fire(
        'Success',
        'Comic removed',
        'success'
    )</script>" !!}
@endif

@if (session()->has('Actualizado'))
    {!! "<script>Swal.fire(
        'Success',
        'Comic edited',
        'success'
    )</script>" !!}
@endif

    <div class="d-flex justify-content-center">
        <h1 class="mt-3" style="color: #033E8C">Comics</h1>
    </div>
    <div class="d-flex justify-content-center">
        <div class="row justify-content-center">
            <div class="container">
                <form method="POST" action="{{ route('comic.show') }}">
                    @csrf
                    <div class="row">
                        <input class="form-control me-17" type="text" name="IdItem" placeholder="Search"
                            list="datalistOptions" autocomplete="off">
                    </div>
                    <div class="row">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        <datalist id="datalistOptions">
                            @foreach ($query as $consulta)
                                <option value="{{ $consulta->Name}}"></option>
                            @endforeach
                        </datalist>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end"><a href="{{ route('comic.create') }}"
            class="btn btn-warning mt-1 mx-5 text-white p-2">Add Comic</a></div>
    <div class="d-flex justify-content-center m-3 flex-wrap">
        @foreach ($query as $consulta)
            @if ($consulta->Type == 'Comic')
                @csrf
                {!! method_field('PUT') !!}
                <div class="card bg-light m-3 rounded-lg border-gray border-2" style="width: 18rem;">
                    <div class="d-flex justify-content-center px-2 py-3">
                        {{-- Esta imagen deberá estar en un if de la cantidad del articulo, si esta es 0
                        poner una imagen de alerta, sino, poner la imagen del articulo --}}
                        @if ($consulta->Amount == '0')
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Warning.svg/2219px-Warning.svg.png"
                                alt="" width="40%">
                        @else
                            <img src="{{ $consulta->Image }}" alt="" width="40%">
                        @endif
                        {{-- La imagen del articulo será la que está en la BD por lo que se debe de imprimir --}}

                    </div>
                    <div class="card-body">
                        {{ $consulta->Name }}
                        <h5 class="card-title text-center mb-1"></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Edition: {{ $consulta->Edition }} </b></li>
                        <li class="list-group-item"><b>Company: {{ $consulta->Brand }} </b></li>
                        <li class="list-group-item"><b>Amount: {{ $consulta->Amount }} </b></li>
                        <li class="list-group-item"><b>Price sell: ${{ $consulta->Price_sell }} </b></li>
                        <li class="list-group-item"><b>Price buy: ${{ $consulta->Price_buy }} </b></li>
                        <li class="list-group-item"><b>Adimssion date: {{ $consulta->Admission_date }} </b></li>
                    </ul>
                    <div class="card-body">
                        <a href="{{ route('comic.edit', $consulta->Id_item) }}" class="btn"
                            style="color:white;background-color:#033E8C">Edit</a>
                        {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $consulta->Id_book }}">Delete</button> --}}
                        <button type="button" class="btn" style="background-color:#D90404;color:white"
                            data-bs-toggle="modal" data-bs-target="#comicDelete{{ $consulta->Id_item }}">Delete</button>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

@stop
