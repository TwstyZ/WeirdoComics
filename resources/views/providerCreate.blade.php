@extends('template')
@section('content')


    @if (session()->has('confirmacionregistro'))
        {!! "<script>Swal.fire(
                'Success',
                'Saved provider',
                'success'
            )</script>" !!}
    @endif
    <div class="container d-flex justify-content-center my-5">
        <div class="card border-2" style="width:70%;">
            <div class="card-header bg-light">
                <h2 class="mx-5 mt-5 mb-3" style="color: #033E8C">Provider Register</h2>
            </div>
            <div class="card-body mx-5 my-1">
                <form action="{{ route('provider.store') }}" method="POST">
                    @csrf

                    <h5 class="mt-2">Name</h5>
                    <div class="form-group">
                        <input name="Name" id="Name"class="form-control border-2" type="text" placeholder="Name"
                            style="background-color: #e1eefe;" value={{ old('Name') }}>
                        <p class='card-title fw-bold text-start' style="color:#D90404">
                            <u>
                                {{ $errors->first('Name') }}
                            </u>
                        </p>
                    </div>

                    <h5 class="mt-2">Address</h5>
                    <div class="form-group">
                        <input name="Address" class="form-control border-2" type="text" placeholder="Address"
                            style="background-color: #e1eefe;" value={{ old('Address') }}>
                        <p class='card-title fw-bold text-start' style="color:#D90404">
                            <u>
                                {{ $errors->first('Address') }}
                            </u>
                        </p>
                    </div>

                    <h5 class="mt-2">Country</h5>
                    <div class="form-group">
                        <input name="Country" class="form-control border-2" type="text" placeholder="Country"
                            style="background-color: #e1eefe;" value={{ old('Country') }}>
                        <p class='card-title fw-bold text-start' style="color:#D90404">
                            <u>
                                {{ $errors->first('Country') }}
                            </u>
                        </p>
                    </div>

                    <h5 class="mt-2">Contact</h5>
                    <div class="form-group">
                        <input name="Contact" class="form-control border-2" type="text" placeholder="Contact"
                            style="background-color: #e1eefe;" value={{ old('Contact') }}>
                        <p class='card-title fw-bold text-start' style="color:#D90404">
                            <u>
                                {{ $errors->first('Contact') }}
                            </u>
                        </p>
                    </div>

                    <h5 class="mt-2">Cellphone</h5>
                    <div class="form-group">
                        <input name="Cellphone" class="form-control border-2" type="text" placeholder="Cellphone"
                            style="background-color: #e1eefe;" value={{ old('Cellphone') }}>
                        <p class='card-title fw-bold text-start' style="color:#D90404">
                            <u>
                                {{ $errors->first('Cellphone') }}
                            </u>
                        </p>
                    </div>

                    <h5 class="mt-2">Telephone</h5>
                    <div class="form-group">
                        <input name="Telephone" class="form-control border-2" type="text" placeholder="Telephone"
                            style="background-color: #e1eefe;" value={{ old('Telephone') }}>
                        <p class='card-title fw-bold text-start' style="color:#D90404">
                            <u>
                                {{ $errors->first('Telephone') }}
                            </u>
                        </p>
                    </div>

                    <h5 class="mt-2">Email</h5>
                    <div class="form-group">
                        <input name="Email" class="form-control border-2" type="text" placeholder="Email"
                            style="background-color: #e1eefe;" value={{ old('Email') }}>
                        <p class='card-title fw-bold text-start' style="color:#D90404">
                            <u>
                                {{ $errors->first('Email') }}
                            </u>
                        </p>
                    </div>

                    <h5 class="mt-2">Image (Default Image Loaded)</h5>
                    <div class="form-group">
                        <input name="Image" class="form-control border-2" type="text" placeholder="Image"
                            style="background-color: #e1eefe;" value="https://cdn.icon-icons.com/icons2/574/PNG/512/Freight_transport_icon-icons.com_54817.png">
                        <p class='card-title fw-bold text-start' style="color:#D90404">
                            <u>
                                {{ $errors->first('Image') }}
                            </u>
                        </p>
                    </div>



                    <div class="mt-4 mb-5">
                        <button type="submit" class="btn" style="background-color: #033E8C;color:white">Save</button>
                        <a href="{{ route('home') }}" class="btn"
                            style="background-color: #D90404;color:white">Cancel</a>
                    </div>
            </div>
            </form>
        </div>
    </div>


@stop
