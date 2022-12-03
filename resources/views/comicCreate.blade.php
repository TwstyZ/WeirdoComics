@extends('template')
@section('content')
    <div class="">
        <div class="container d-flex justify-content-center">
            <div class="card border-2 bg-light" style="width:70%;">
                <div class="card-header">
                    <h2 class="mx-5 mt-5 mb-3">Comic Register</h2>
                </div>
                <div class="card-body mx-5 my-1">
                    <form action="" method="POST">
                        @csrf

                        <h6 class="mt-2">Title</h6>
                        <div class="form-group">
                            <input name="title" class="form-control" type="text"placeholder="Title"
                                value={{ old('title') }}>
                            <p class='card-title text-danger fst-italic fw-bold text-start'>
                                {{ $errors->first('title') }}
                            </p>
                        </div>


                        <div class="mt-4 mb-5">
                            <button type="submit" class="btn" style="background-color: #143F6B;color:white">Save</button>
                            <a href="" class="btn" style="background-color: #F55353;color:white">Cancel</a>
                        </div>
                </div>

                </form>



            </div>
        </div>
    @stop
