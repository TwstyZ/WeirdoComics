<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Session;
use App\Http\Requests\itemSaleRequest;

class itemSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $query = DB::table('item')->select('Id_item', 'Name', 'Type', 'Price_sell', 'Amount')->get();
        $idSale = DB::table('sale')->select('Id_sale')->latest()->first();
        return view('itemSaleCreate')->with(compact('idSale', 'query'), 'first');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(itemSaleRequest $request)
    {
        $result = request('Item_id');
        $result_explode = explode('|', $result);
        $total= request('Amount') * $result_explode[1];

        $itemId = $result_explode[0];
        $idSale= request('Sale_id');

        DB::table('item_sale')->insert([
            "Amount"=>$request->input('Amount'),
            "Item_id"=>$itemId,
            "Total"=>$total,
            "Sale_id"=>$request->input('Sale_id'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
        $query = DB::table('item')->select('Id_item', 'Name', 'Type', 'Price_sell', 'Amount')->get();
        return view('itemSaleCreate')->with(compact('idSale', 'query'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(itemSaleRequest $request, $id)
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
