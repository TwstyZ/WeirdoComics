@extends('template')
@section('content')
    <div>
        <div class="container d-flex justify-content-center">
            <div class="card border-2" style="width:70%;">
                <div class="card-header bg-light">
                    <h2 class="mx-5 mt-5 mb-3" style="color: #033E8C">Order Register</h2>
                </div>
                <div class="card-body mx-5 my-1">
                    <form action="{{ route('order.store') }}" method="POST">
                        @csrf

                        <h5 class="mt-2">Provider</h5>
                        <div class="form-group">
                            <select name="Id_provider" id="Id_provider" class="form-select"
                                style="background-color: #e1eefe;" value={{ old('Id_provider') }}>
                                <option value="" disabled selected>Select your option</option>
                                @foreach ($query as $consulta)
                                    <option value="{{ $consulta->Id_provider }}">{{ $consulta->Name }}<span> |
                                            {{ $consulta->Contact }}</span></option>
                                @endforeach
                            </select>

                        </div>
                        <p class='card-title fw-bold text-start' style="color:#D90404">
                            <u>
                                {{ $errors->first('Id_provider') }}
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
