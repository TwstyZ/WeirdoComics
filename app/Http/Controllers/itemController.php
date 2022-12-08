<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\articleRequest;
use DB;
use Carbon\Carbon;

class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query=DB::table('item')->get()->where('Type','!=',"Comic");
        return view('itemIndex',compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('itemCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(articleRequest $request)
    {
        $venta = request('Price_buy');

        $precio = $venta+(0.4*$venta);

        DB::table('item')->insert([
            "Name"=>$request->input('Name'),
            "Type"=>$request->input('Type'),
            "Brand"=>$request->input('Brand'),
            "Description"=>$request->input('Description'),
            "Amount"=>$request->input('Amount'),
            "Price_buy"=>$request->input('Price_buy'),
            "Admission_date"=>$request->input('Admission_date'),
            "Image"=>$request->input('Image'),
            "Price_sell"=>$precio,
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('item/create')->with('confirmacion',"tu item se guardo");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $Name = request('IdItem');
        $query=DB::table('item')->where('Name',$Name)->first();
        return view('itemSearch',compact('query'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId=DB::table('item')->where('Id_item',$id)->first();
        return view('itemEdit',compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(articleRequest $request, $id)
    {
        DB::table('item')->where('Id_item',$id)->update([
            "Name"=>$request->input('Name'),
            "Type"=>$request->input('Type'),
            "Brand"=>$request->input('Brand'),
            "Description"=>$request->input('Description'),
            "Amount"=>$request->input('Amount'),
            "Price_buy"=>$request->input('Price_buy'),
            "Admission_date"=>$request->input('Admission_date'),
            "Image"=>$request->input('Image'),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('item/index')->with('confirmacion',"tu item se actualizó");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('item')->where('Id_item',$id)->delete();
        return redirect('item/index')->with('Eliminado',"tu item se eliminó");  
    }
}
