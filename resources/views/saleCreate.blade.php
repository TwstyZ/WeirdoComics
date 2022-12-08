@extends('template')
@section('content')
    <div>
        <div class="container d-flex justify-content-center">
            <div class="card border-2" style="width:70%;">
                <div class="card-header bg-light">
                    <h2 class="mx-5 mt-5 mb-3" style="color: #033E8C">Sale Register</h2>
                </div>
                <div class="card-body mx-5 my-1">
                    <form action="{{route('sale.store')}}" method="POST">
                        @csrf

                        <h5 class="mt-2">Seller</h5>
                        <div class="form-group">
                            <select name="Id_seller" id="Id_seller" class="form-select"
                                style="background-color: #e1eefe;" value={{ old('Id_seller') }}>
                                <option value="" disabled selected>Select your option</option>
                                @foreach ($query as $consulta)
                                    <option value="{{$consulta->Id_seller }}">{{$consulta->Name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <p class='card-title fw-bold text-start' style="color:#D90404">
                            <u>
                                {{ $errors->first('Id_seller') }}
                            </u>
                        </p>
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
