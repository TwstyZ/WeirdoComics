@extends('template')
@section('content')

@php(
$select = DB::table('item_order')
->join('order', 'order.Id_order', '=', 'item_order.Order_id')
->join('item', 'item.Id_item', '=', 'item_order.Item_id')
->join('provider', 'provider.Id_provider', '=', 'order.Provider_id')
->select('order.Id_order', 'order.created_at', 'provider.Name as Name_provider', 'provider.Email', 'provider.Address', 'provider.Country', 'provider.Contact', 'provider.Cellphone', 'item_order.Amount', 'item_order.Total', 'item.Name as Name_item', 'item.Type', 'item.Brand')
->where('order.Id_order', '=', '3')
->get()
)
    @php($total = 0)
    <div class="my-5 mx-5">
        <form method="POST" action="{{route('email.send')}}">
            @csrf
        <div>
            <label for="exampleFormControlInput1" class="form-label">From</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Adress_email"
                value="weirdocomic" name="Name_form">
        </div>
        <div>
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Adress_email"
                value={{ $select[0]->Email }} name="Email_form">
        </div>
        <div class="my-2">
            <label for="exampleFormControlInput1" class="form-label">Subject</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="Purchase Order"
                name="Header_email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Body</label>
            <textarea class="form-control"  id="exampleFormControlTextarea1" rows="15" name="Body_email">
            Date: {{ $select[0]->created_at }}    No. orden: {{ $select[0]->Id_order }}      

            Contact: {{ $select[0]->Contact }}
            cellphone: {{ $select[0]->Cellphone }}
            Country: {{ $select[0]->Country }}
            Address: {{ $select[0]->Address }}

            @foreach ($select as $consulta)
            @php($total = $total + $consulta->Total)
            {{ $consulta->Name_item }} ({{ $consulta->Amount}})
            {{ $consulta->Type}} | {{ $consulta->Brand}}
            ${{ number_format((float) $consulta->Total, 2, '.', '')}}
            @endforeach

            Total Final: ${{ number_format((float) $total, 2, '.', '') }}

            
            </textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Send</button>
        </div>
    </form>
    </div>

@stop