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
    ->select('order.Id_order', 'order.created_at', 'provider.Name as Name_provider', 'provider.Email', 'provider.Address', 'provider.Country', 'provider.Contact', 'provider.Cellphone', 'item_order.Amount', 'item_order.Total', 'item.Name', 'item.Type', 'item.Brand')
    ->where('order.Id_order', '=', $id)
    ->get();
    $pdf = PDF::loadView('pdfTicket',['select'=>$select]);
    // aqui busca la vista para transformarla en pdf
    // La vista puede ser usado con boostrap
    return $pdf->download("ticket_Order.pdf");
}
public function download2($id)
{
    $select=DB::table('item_sale')
    ->join('sale', 'sale.Id_sale', '=', 'item_sale.Sale_id')
    ->join('item', 'item.Id_item', '=', 'item_sale.Item_id')
    ->join('seller', 'seller.Id_seller', '=', 'sale.Seller_id')
    ->select('sale.Id_sale', 'sale.created_at', 'seller.Name as Name_seller', 'item_sale.Amount', 'item_sale.Total', 'item.Name as Name_item', 'item.Type', 'item.Brand')
    ->where('sale.Id_sale', '=', $id)
    ->get();
    $pdf = PDF::loadView('pdfTicket_Sale',['select'=>$select]);
    // aqui busca la vista para transformarla en pdf
    // La vista puede ser usado con boostrap
    return $pdf->download("ticket_Sale.pdf");
}
}
