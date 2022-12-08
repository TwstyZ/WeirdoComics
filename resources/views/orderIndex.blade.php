@extends('template')
@section('content')

<div class="d-flex justify-content-center"><h1 class="mt-3" style="color: #033E8C">Order Index</h1></div>


<div class="d-flex justify-content-end"><a href="" class="btn btn-warning mt-1 mb-5 mx-5 text-white p-2">Add Item</a></div>
    
<div class="d-flex justify-content-center" >
    <table class="table table-sm" style="width: 90%">
        <thead style="background-color: #F28705; color:white">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Provider</th>
            <th scope="col">Date</th>
            <th scope="col">Email</th>
            <th scope="col">Details</th>
            <th scope="col">PDF</th>
            <th scope="col">Email</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($select as $consultar)
                <tr>
                    <th>{{$consultar->Id_order}}</th>
                    <th>{{$consultar->Name}}</th>
                    <th>{{$consultar->created_at}}</th>
                    <th>{{$consultar->Email}}</th>

                </tr>
            @endforeach

        </tbody>
      </table>
</div>



@stop