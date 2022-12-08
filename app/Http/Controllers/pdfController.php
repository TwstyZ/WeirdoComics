<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use Carbon\Carbon;

class pdfController extends Controller
{
public function download($id)
{
    $select=DB::table('item_order')
    ->join('order', 'order.Id_order', '=', 'item_order.Order_id')
    ->join('item', 'item.Id_item', '=', 'item_order.Item_id')
    ->join('provider', 'provider.Id_provider', '=', 'order.Provider_id')
    ->select('order.Id_order', 'order.created_at', 'provider.Name', 'provider.Email', 'provider.Address', 'provider.Country', 'provider.Contact', 'provider.Cellphone', 'item_order.Amount', 'item_order.Total', 'item.Name', 'item.Type', 'item.Brand')
    ->get();
    $pdf = PDF::loadView('pdfTicket',['select'=>$select]);
    // aqui busca la vista para transformarla en pdf
    // La vista puede ser usado con boostrap
    return $pdf->stream("ticket.pdf");
}
}
