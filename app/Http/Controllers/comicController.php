<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\itemRequest;
use DB;
use Carbon\Carbon;

class comicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query=DB::table('item')->get()->where('Type','Comic');
        return view('comicIndex',compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comicCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(itemRequest $request)
    {
        $venta = request('Price_buy');

        $precio = $venta+(0.4*$venta);

        DB::table('item')->insert([
            "Name"=>$request->input('Name'),
            "Edition"=>$request->input('Edition'),
            "Brand"=>$request->input('Brand'),
            "Amount"=>$request->input('Amount'),
            "Price_buy"=>$request->input('Price_buy'),
            "Price_sell"=>$precio,
            "Admission_date"=>$request->input('Admission_date'),
            "Image"=>$request->input('Image'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('comic/create')->with('confirmacion',"tu comic se guardo");
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
        return view('comicSearch',compact('query'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $query=DB::table('item')->where('Id_item',$id)->first();
        return view('comicEdit',compact('query'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(itemRequest $request, $id)
    {
        $venta = request('Price_buy');

        $precio = $venta+(0.4*$venta);
        DB::table('item')->where('Id_item',$id)->update([
            "Name"=>$request->input('Name'),
            "Edition"=>$request->input('Edition'),
            "Brand"=>$request->input('Brand'),
            "Amount"=>$request->input('Amount'),
            "Price_buy"=>$request->input('Price_buy'),
            "Price_sell"=>$precio,
            "Admission_date"=>$request->input('Admission_date'),
            "Image"=>$request->input('Image'),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('comic/index')->with('Actualizado',"tu comic se actualiz??");
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
        return redirect('comic/index')->with('Eliminado',"tu comic se elimin??");        
    }
}
