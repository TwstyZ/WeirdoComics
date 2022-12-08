<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\orderRequest;
use DB;
use Carbon\Carbon;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $select=DB::table('order')
        // ->join('provider', 'provider.Id_provider', '=', 'order.Provider_id')
        // ->select('order.Id_order', 'order.created_at', 'provider.Name', 'provider.Email')
        // ->get();
        $select=DB::table('item_order')
        ->join('order', 'order.Id_order', '=', 'item_order.Order_id')
        ->join('provider', 'provider.Id_provider', '=', 'order.Provider_id')
        ->select(DB::raw('count(item_order.Order_id) as count'))
        ->select('order.Id_order', 'order.created_at', 'provider.Name', 'provider.Email')
        ->groupBy('order.Id_order')
        ->having(DB::raw('count(item_order.Order_id)'), '>', 0)
        ->get();

        return view('orderIndex',compact('select'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $query = DB::table('provider')->select('Id_provider', 'Name', 'Contact')->get();
        return view('orderCreate', compact('query'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(orderRequest $request)
    {
        DB::table('order')->insert([
            "Provider_id"=>$request->input('Id_provider'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('itemOrder/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $select=DB::table('item_order')
        ->join('order', 'order.Id_order', '=', 'item_order.Order_id')
        ->join('item', 'item.Id_item', '=', 'item_order.Item_id')
        ->join('provider', 'provider.Id_provider', '=', 'order.Provider_id')
        ->select('order.Id_order', 'order.created_at', 'provider.Name as Name_provider', 'provider.Email', 'provider.Address', 'provider.Country', 'provider.Contact', 'provider.Cellphone', 'item_order.Amount', 'item_order.Total', 'item.Name as Name_item', 'item.Type', 'item.Brand')
        ->where('order.Id_order', '=', $id)
        ->get();

        return view('itemOrderIndex',compact('select'));
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
