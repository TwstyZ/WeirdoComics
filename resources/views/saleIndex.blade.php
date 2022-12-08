@extends('template')
@section('content')

<div class="d-flex justify-content-center"><h1 class="mt-3" style="color: #033E8C">Sale Index</h1></div>


<div class="d-flex justify-content-end"><a href="{{route('sale.create')}}" class="btn btn-warning mt-1 mb-5 mx-5 text-white p-2">Generate Sale</a></div>
    
<div class="d-flex justify-content-center" >
    <table class="table table-sm" style="width: 90%">
        <thead style="background-color: #416284; color:white">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Seller</th>
            <th scope="col">Date</th>
            <th scope="col">Email</th>
            <th scope="col">Details</th>
            <th scope="col">PDF</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($select as $consulta)
            @csrf
                <tr>
                    <th>{{$consulta->Id_sale}}</th>
                    <th>{{$consulta->Name}}</th>
                    <th>{{$consulta->created_at}}</th>
                    <th>{{$consulta->Email}}</th>
                    <th><a href="{{route('sale.show', $consulta->Id_sale)}}" class="btn" style="color: white; background-color: #F28705">Details</a></th>
                    <th><a href="{{route('pdf.download2',$consulta->Id_sale)}}" class="btn" style="color: white; background-color: #D9043D">PDF</a></th>
                </tr>
            @endforeach

        </tbody>
      </table>
</div>



@stop