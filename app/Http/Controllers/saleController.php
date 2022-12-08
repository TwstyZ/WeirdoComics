<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\saleRequest;
use DB;
use Carbon\Carbon;

class saleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $select=DB::table('item_sale')
        ->join('sale', 'sale.Id_sale', '=', 'item_sale.Sale_id')
        ->join('seller', 'seller.Id_seller', '=', 'sale.Seller_id')
        ->select(DB::raw('count(item_sale.Sale_id) as count'))
        ->select('sale.Id_sale', 'sale.created_at', 'seller.Name', 'seller.Email')
        ->groupBy('sale.Id_sale')
        ->having(DB::raw('count(item_sale.Sale_id)'), '>', 0)
        ->get();

        return view('saleIndex',compact('select'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $query = DB::table('seller')->select('Id_seller', 'Name')->where('Type', 'like', 'v')->get();
        return view('saleCreate', compact('query'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(saleRequest $request)
    {
        DB::table('sale')->insert([
            "Seller_id"=>$request->input('Id_seller'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('itemSale/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $select=DB::table('item_sale')
        ->join('sale', 'sale.Id_sale', '=', 'item_sale.Sale_id')
        ->join('item', 'item.Id_item', '=', 'item_sale.Item_id')
        ->join('seller', 'seller.Id_seller', '=', 'sale.Seller_id')
        ->select('sale.Id_sale', 'sale.created_at', 'seller.Name as Name_seller', 'item_sale.Amount', 'item_sale.Total', 'item.Name as Name_item', 'item.Type', 'item.Brand')
        ->where('sale.Id_sale', '=', $id)
        ->get();

        return view('itemSaleIndex',compact('select'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
