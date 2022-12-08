@extends('template')
@section('content')

    @if (empty($query->Type))
        <div class="my-5 text-center">
            <h1 class="my-5">Item not found</h1>
            <h1>:(</h1>
            <br>
            <a href="{{ route('comic.index') }}" class="btn" style="color:white;background-color:#033E8C">Back</a>
        </div>
    @elseif($query->Type == 'Comic')
        <div class="d-flex justify-content-center m-3 flex-wrap">
            @csrf
            {!! method_field('PUT') !!}
            <div class="card bg-light m-3 rounded-lg border-gray border-2" style="width: 18rem;">
                <div class="d-flex justify-content-center px-2 py-3">
                    {{-- Esta imagen deberá estar en un if de la cantidad del articulo, si esta es 0
                poner una imagen de alerta, sino, poner la imagen del articulo --}}
                    @if ($query->Amount == '0')
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Warning.svg/2219px-Warning.svg.png"
                            alt="" width="40%">
                    @else
                        <img src="{{ $query->Image }}" alt="" width="40%">
                    @endif
                    {{-- La imagen del articulo será la que está en la BD por lo que se debe de imprimir --}}

                </div>
                <div class="card-body">
                    {{ $query->Name }}
                    <h5 class="card-title text-center mb-1"></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Edition: {{ $query->Edition }} </b></li>
                    <li class="list-group-item"><b>Company: {{ $query->Brand }} </b></li>
                    <li class="list-group-item"><b>Amount: {{ $query->Amount }} </b></li>
                    <li class="list-group-item"><b>Price sell: {{ $query->Price_sell }} </b></li>
                    <li class="list-group-item"><b>Price buy: {{ $query->Price_buy }} </b></li>
                    <li class="list-group-item"><b>Adimssion date: {{ $query->Admission_date }} </b></li>
                </ul>
                <div class="card-body text-center">
                    <a href="{{ route('comic.index', $query->Id_item) }}" class="btn"
                        style="color:white;background-color:#009900">Back</a>
                </div>
            </div>
        </div>
    @else
        <div class="my-5 text-center">
            <h1 class="my-5">Item not found</h1>
            <h1>:(</h1>
            <br>
            <a href="{{ route('comic.index') }}" class="btn" style="color:white;background-color:#033E8C">Back</a>
        </div>
    @endif
@stop
