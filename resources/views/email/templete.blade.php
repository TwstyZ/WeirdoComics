
@php($select = DB::table('item_order')
->join('order', 'order.Id_order', '=', 'item_order.Order_id')
->join('item', 'item.Id_item', '=', 'item_order.Item_id')
->join('provider', 'provider.Id_provider', '=', 'order.Provider_id')
->select('order.Id_order', 'order.created_at', 'provider.Name as Name_provider', 'provider.Email', 'provider.Address', 'provider.Country', 'provider.Contact', 'provider.Cellphone', 'item_order.Amount', 'item_order.Total', 'item.Name as Name_item', 'item.Type', 'item.Brand')
->where('order.Id_order', '=','9')
->get())

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <p>To: {{$select[0]->Name_provider}}</p>
    <p>Email: {{$select[0]->Email}}</p>
    <p>Address: {{$select[0]->Address}}</p>
    <p>Country: {{$select[0]->Country}}</p>
    <p>Cellphone: {{$select[0]->Cellphone}}</p><br>
    <h5>Pedido</h5>
    <p>No.pedido: {{$select[0]->Id_order}}</p>
    <p>Amount: {{$select[0]->Amount}}</p>
    <p>Total: {{$select[0]->Total}}</p>
    <p>Item: {{$select[0]->Name_item}}</p>
    <p>Type: {{$select[0]->Type}}</p>
    <p>Brand: {{$select[0]->Brand}}</p>
</body>
</html>