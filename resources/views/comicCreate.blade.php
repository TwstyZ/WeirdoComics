@extends('template')
@section('content')
    <div>
        <div class="container d-flex justify-content-center">
            <div class="card border-2" style="width:70%;">
                <div class="card-header bg-light">
                    <h2 class="mx-5 mt-5 mb-3" style="color: #033E8C">Comic Register</h2>
                </div>
                <div class="card-body mx-5 my-1">
                    <form action="{{route('comic.store')}}" method="POST">
                        @csrf

                        <h5 class="mt-2">Name</h5>
                        <div class="form-group">
                            <input name="Name" class="form-control border-2" type="text" placeholder="Name" style="background-color: #e1eefe;" 
                                value={{ old('Name') }}>
                            <p class='card-title fw-bold text-start' style="color:#D90404">
                                <u>
                                    {{ $errors->first('Name') }}
                                </u>
                            </p>
                        </div>
                        
                        <h5 class="mt-2">Edition</h5>
                        <div class="form-group">
                            <input name="Edition" class="form-control border-2" type="number" placeholder="Edition" style="background-color: #e1eefe;" 
                                value={{ old('Edition') }}>
                            <p class='card-title fw-bold text-start' style="color:#D90404">
                                <u>
                                    {{ $errors->first('Edition') }}
                                </u>
                            </p>
                        </div>

                        <h5 class="mt-2">Company</h5>
                        <div class="form-group">
                            <input name="Brand" class="form-control border-2" type="text" placeholder="Company" style="background-color: #e1eefe;" 
                                value={{ old('Brand') }}>
                            <p class='card-title fw-bold text-start' style="color:#D90404">
                                <u>
                                    {{ $errors->first('Brand') }}
                                </u>
                            </p>
                        </div>

                        <h5 class="mt-2">Amount</h5>
                        <div class="form-group">
                            <input name="Amount" class="form-control border-2" type="number" placeholder="Amount" style="background-color: #e1eefe;" 
                                value={{ old('Amount') }}>
                            <p class='card-title fw-bold text-start' style="color:#D90404">
                                <u>
                                    {{ $errors->first('Amount') }}
                                </u>
                            </p>
                        </div>

                        <h5 class="mt-2">Price Buy</h5>
                        <div class="form-group">
                            <input name="Price_buy" class="form-control border-2" type="number" placeholder="Price Buy" style="background-color: #e1eefe;" 
                                value={{ old('Price_buy') }}>
                            <p class='card-title fw-bold text-start' style="color:#D90404">
                                <u>
                                    {{ $errors->first('Price_buy') }}
                                </u>
                            </p>
                        </div>

                        <h5 class="mt-2">Admission Date</h5>
                        <div class="form-group">
                            <input name="Admission_date" class="form-control border-2" type="date" placeholder="Admission Date" style="background-color: #e1eefe;" 
                                value={{ old('Admission_date') }}>
                            <p class='card-title fw-bold text-start' style="color:#D90404">
                                <u>
                                    {{ $errors->first('Admission_date') }}
                                </u>
                            </p>
                        </div>

                        <h5 class="mt-2">Image (Default Image Loaded)</h5>
                        <div class="form-group">
                            <input name="Image" class="form-control border-2" type="text" placeholder="Image" style="background-color: #e1eefe;" 
                                value="https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Warning.svg/2219px-Warning.svg.png">
                            <p class='card-title fw-bold text-start' style="color:#D90404">
                                <u>
                                    {{ $errors->first('Image') }}
                                </u>
                            </p>
                        </div>



                        <div class="mt-4 mb-5">
                            <button type="submit" class="btn"
                                style="background-color: #033E8C;color:white">Save</button>
                            <a href="" class="btn" style="background-color: #D90404;color:white">Cancel</a>
                        </div>
                </div>
                </form>
            </div>
        </div>
    @stop
