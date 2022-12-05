@extends('template')
@section('content')


<div class="container col-7">
    <h1 class="display-4 text-center mt-5 mb-5">
        Editar información del comic
    </h1>
    <div class="card text-center mb-5">
        <div class="card-header">
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('comic.update',$consulta->Id_item)}}">
                @csrf
                {!!method_field('PUT')!!}
                <h5 class="mt-2">Name</h5>
                <div class="form-group">
                    <input name="Name" class="form-control border-2" type="text" placeholder="Name" style="background-color: #e1eefe;" 
                        value={{$consultaId->Name}}>
                    <p class='card-title fw-bold text-start' style="color:#D90404">
                        <u>
                            {{ $errors->first('Name') }}
                        </u>
                    </p>
                </div>
                
                <h5 class="mt-2">Edition</h5>
                <div class="form-group">
                    <input name="Edition" class="form-control border-2" type="number" placeholder="Edition" style="background-color: #e1eefe;" 
                        value={{$consultaId->Edition}}>
                    <p class='card-title fw-bold text-start' style="color:#D90404">
                        <u>
                            {{ $errors->first('Edition') }}
                        </u>
                    </p>
                </div>

                <h5 class="mt-2">Company</h5>
                <div class="form-group">
                    <input name="Brand" class="form-control border-2" type="text" placeholder="Company" style="background-color: #e1eefe;" 
                        value={{$consultaId->Brand}}>
                    <p class='card-title fw-bold text-start' style="color:#D90404">
                        <u>
                            {{ $errors->first('Brand') }}
                        </u>
                    </p>
                </div>

                <h5 class="mt-2">Amount</h5>
                <div class="form-group">
                    <input name="Amount" class="form-control border-2" type="number" placeholder="Amount" style="background-color: #e1eefe;" 
                        value={{$consultaId->Amount}}>
                    <p class='card-title fw-bold text-start' style="color:#D90404">
                        <u>
                            {{ $errors->first('Amount') }}
                        </u>
                    </p>
                </div>

                <h5 class="mt-2">Price Buy</h5>
                <div class="form-group">
                    <input name="Price_buy" class="form-control border-2" type="number" placeholder="Price Buy" style="background-color: #e1eefe;" 
                        value={{$consultaId->Price_buy}}>
                    <p class='card-title fw-bold text-start' style="color:#D90404">
                        <u>
                            {{ $errors->first('Price_buy') }}
                        </u>
                    </p>
                </div>

                <h5 class="mt-2">Admission Date</h5>
                <div class="form-group">
                    <input name="Admission_date" class="form-control border-2" type="date" placeholder="Admission Date" style="background-color: #e1eefe;" 
                        value={{$consultaId->Admission_date}}>
                    <p class='card-title fw-bold text-start' style="color:#D90404">
                        <u>
                            {{ $errors->first('Admission_date') }}
                        </u>
                    </p>
                </div>

                <h5 class="mt-2">Image (Default Image Loaded)</h5>
                <div class="form-group">
                    <input name="Image" class="form-control border-2" type="text" placeholder="Image" style="background-color: #e1eefe;" 
                        value={{$consultaId->Image}}>
                    <p class='card-title fw-bold text-start' style="color:#D90404">
                        <u>
                            {{ $errors->first('Image') }}
                        </u>
                    </p>
                </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Actualizar Comic</button>
            </form>
        </div>
    </div>
</div>

@stop