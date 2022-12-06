@extends('template')
@section('content')

@if (session()->has('confirmacioneditar'))
{!! "<script>Swal.fire(
        'Success',
        'Provider edited',
        'success'
    )</script>" !!}
@endif
    <div class="d-flex justify-content-center">
        <h1 class="mt-3" style="color: #033E8C">Provider Editor</h1>
    </div>

    <div class="d-flex justify-content-end"><a href="" class="btn btn-warning mt-1 mx-5 text-white p-2">Add Item</a>
    </div>

    <div class="d-flex justify-content-center m-3 flex-wrap">
       
        <div class="card bg-light m-3 rounded-lg border-gray border-2" style="width:90%;">
            <div class="d-flex justify-content-start p-3 flex-wrap align-items-center">
                <div class="text-center" style="width: 40%">
                    <img src="{{ $query->Image }}" alt="" width="50%">
                </div>

                <div style="width: 50%" class="m-3">
                    <form action="{{route('provider.update',$query->Id_provider)}}" method="POST">
                        @csrf
                        {!! method_field('PUT') !!}

                        <h5 class="mt-2">Name</h5>
                        <div class="form-group">
                            <input name="Name" id="Name"class="form-control border-2" type="text"
                                placeholder="Name" style="background-color: #e1eefe;" value={{ $query->Name }}>
                            <p class='card-title fw-bold text-start' style="color:#D90404">
                                <u>
                                    {{ $errors->first('Name') }}
                                </u>
                            </p>
                        </div>

                        <h5 class="mt-2">Address</h5>
                        <div class="form-group">
                            <input name="Address" class="form-control border-2" type="text" placeholder="Address"
                                style="background-color: #e1eefe;" value={{ $query->Address }}>
                            <p class='card-title fw-bold text-start' style="color:#D90404">
                                <u>
                                    {{ $errors->first('Address') }}
                                </u>
                            </p>
                        </div>

                        <h5 class="mt-2">Country</h5>
                        <div class="form-group">
                            <input name="Country" class="form-control border-2" type="text" placeholder="Country"
                                style="background-color: #e1eefe;" value={{ $query->Country }}>
                            <p class='card-title fw-bold text-start' style="color:#D90404">
                                <u>
                                    {{ $errors->first('Country') }}
                                </u>
                            </p>
                        </div>

                        <h5 class="mt-2">Contact</h5>
                        <div class="form-group">
                            <input name="Contact" class="form-control border-2" type="text" placeholder="Contact"
                                style="background-color: #e1eefe;" value={{ $query->Contact }}>
                            <p class='card-title fw-bold text-start' style="color:#D90404">
                                <u>
                                    {{ $errors->first('Contact') }}
                                </u>
                            </p>
                        </div>

                        <h5 class="mt-2">Cellphone</h5>
                        <div class="form-group">
                            <input name="Cellphone" class="form-control border-2" type="text" placeholder="Cellphone"
                                style="background-color: #e1eefe;" value={{ $query->Cellphone }}>
                            <p class='card-title fw-bold text-start' style="color:#D90404">
                                <u>
                                    {{ $errors->first('Cellphone') }}
                                </u>
                            </p>
                        </div>

                        <h5 class="mt-2">Telephone</h5>
                        <div class="form-group">
                            <input name="Telephone" class="form-control border-2" type="text" placeholder="Telephone"
                                style="background-color: #e1eefe;" value={{ $query->Telephone }}>
                            <p class='card-title fw-bold text-start' style="color:#D90404">
                                <u>
                                    {{ $errors->first('Telephone') }}
                                </u>
                            </p>
                        </div>

                        <h5 class="mt-2">Email</h5>
                        <div class="form-group">
                            <input name="Email" class="form-control border-2" type="text" placeholder="Email"
                                style="background-color: #e1eefe;" value={{ $query->Email }}>
                            <p class='card-title fw-bold text-start' style="color:#D90404">
                                <u>
                                    {{ $errors->first('Email') }}
                                </u>
                            </p>
                        </div>

                        <h5 class="mt-2">Imagen</h5>
                        <div class="form-group">
                            <input name="Image" class="form-control border-2" type="text" placeholder="Image"
                                style="background-color: #e1eefe;" value={{ $query->Image }}>
                            <p class='card-title fw-bold text-start' style="color:#D90404">
                                <u>
                                    {{ $errors->first('Email') }}
                                </u>
                            </p>
                        </div>

                        <div class="mt-4 mb-5">
                            <button type="submit" class="btn"
                                style="background-color: #033E8C;color:white">Save</button>
                            <a href="{{route('provider.index')}}" class="btn" style="background-color: #D90404;color:white">Cancel</a>
                        </div>
                </div>
                </form>
            </div>


        </div>
    </div>
    </div>
@stop
