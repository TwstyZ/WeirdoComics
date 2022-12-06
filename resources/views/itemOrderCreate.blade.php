@foreach ($idOrder as $consulta)
@endforeach
{{$consulta}}

@extends('template')
@section('content')
    <div>
        <div class="container d-flex justify-content-center">
            <div class="card border-2" style="width:70%;">
                <div class="card-header bg-light">
                    <h2 class="mx-5 mt-5 mb-3" style="color: #033E8C">Item Order Register</h2>
                </div>
                <div class="card-body mx-5 my-1">
                    <form action="{{ route('itemOrder.store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="Order_id" id="">
                        <h5 class="mt-2">Item</h5>
                        <div class="form-group">
                            <select name="Item_id" id="Item_id" class="form-select" style="background-color: #e1eefe;"
                                value={{ old('Id_provider') }}>
                                <option value="" disabled selected>Select your option</option>
                                @foreach ($query as $consulta)
                                    <option value={{ $consulta->Id_item }}>{{ $consulta->Name }}<span>
                                            ({{ $consulta->Amount }} pza.)
                                            | ${{ $consulta->Price_sell }} |
                                            {{ $consulta->Type }}</span></option>
                                @endforeach
                            </select>
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
                            <button type="submit" class="btn"
                                style="background-color: #033E8C;color:white">Save</button>
                            <a href="{{ route('home') }}" class="btn"
                                style="background-color: #D90404;color:white">Cancel</a>
                        </div>
                </div>
                </form>
            </div>
        </div>


    @stop