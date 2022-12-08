@extends('template')
@section('content')
@if (session()->has('confirmacion'))
        {!! "<script>Swal.fire(
                                'Success',
                                'Order Created',
                                'success'
                            )</script>" !!}
@endif
<div class="d-flex justify-content-center"><h1 class="mt-3" style="color: #033E8C">Order Index</h1></div>


<div class="d-flex justify-content-end"><a href="{{route('order.create')}}" class="btn btn-warning mt-1 mb-5 mx-5 text-white p-2">Add Order</a></div>
    
<div class="d-flex justify-content-center" >
    <table class="table table-sm" style="width: 90%">
        <thead style="background-color: #416284; color:white">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Provider</th>
            <th scope="col">Date</th>
            <th scope="col">Email</th>
            <th scope="col">Details</th>
            <th scope="col">Email</th>
            <th scope="col">PDF</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($select as $consulta)
            @csrf
                <tr>
                    <th>{{$consulta->Id_order}}</th>
                    <th>{{$consulta->Name}}</th>
                    <th>{{$consulta->created_at}}</th>
                    <th>{{$consulta->Email}}</th>
                    <th><a href="{{route('order.show', $consulta->Id_order)}}" class="btn" style="color: white; background-color: #F28705">Details</a></th>
                    <th><a href="" class="btn" style="color: white; background-color: #033E8C">Email</a></th>
                    <th><a href="{{route('pdf.download',$consulta->Id_order)}}" class="btn" style="color: white; background-color: #D9043D">PDF</a></th>
                </tr>
            @endforeach

        </tbody>
      </table>
</div>



@stop