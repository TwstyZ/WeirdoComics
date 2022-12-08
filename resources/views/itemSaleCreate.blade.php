@if (is_string($idSale) == false)
    @foreach ($idSale as $idSale)
    @endforeach
@endif




@extends('template')
@section('content')
    <div>
        <div class="container d-flex justify-content-center">
            <div class="card border-2" style="width:70%;">
                <div class="card-header bg-light">
                    <h2 class="mx-5 mt-5 mb-3" style="color: #033E8C">Item Sale Register</h2>
                    <h5 class="mt-2 mx-5">Sale #{{ $idSale }} </h5>

                </div>
                <div class="card-body mx-5 my-1">
                    <form action="{{ route('itemSale.store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="Sale_id" id="Sale_id" value="{{ $idSale }}">

                        <h5 class="mt-2">Item</h5>
                        <div class="form-group">
                            <select name="Item_id" id="Item_id" class="form-select" style="background-color: #e1eefe;"
                                value={{ old('Item_id') }}>
                                <option value="" disabled selected>Select your option</option>
                                @foreach ($query as $consulta)
                                    <option value="{{ $consulta->Id_item }}|{{ $consulta->Price_sell }}">
                                        {{ $consulta->Name }}<span>
                                            ({{ $consulta->Amount }} pza.)
                                            | ${{ $consulta->Price_sell }} |
                                            {{ $consulta->Type }}</span></option>
                                @endforeach
                            </select>
                            <p class='card-title fw-bold text-start' style="color:#D90404">
                                <u>
                                    {{ $errors->first('Item_id') }}
                                </u>
                            </p>

                        </div>

                        <h5 class="mt-2">Amount</h5>
                        <div class="form-group">
                            <input name="Amount" class="form-control border-2" type="text" placeholder="Amount"
                                style="background-color: #e1eefe;" value={{ old('Amount') }}>
                            <p class='card-title fw-bold text-start' style="color:#D90404">
                                <u>
                                    {{ $errors->first('Amount') }}
                                </u>
                            </p>
                        </div>

                        <div class="mt-4 mb-5">
                            <button type="submit" class="btn" style="background-color: #033E8C;color:white">+ Add
                                Item</button>
                    </form>

                    <a href="{{ route('sale.index') }}" class="btn" style="background-color: #D90404;color:white">
                        Finish Sale
                    </a>

                </div>
            </div>
        </div>
    </div>


@stop
