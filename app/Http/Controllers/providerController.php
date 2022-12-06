<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Requests\providerRequest;


class providerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::table('provider')->get();
        return view('providerIndex', compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('providerCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(providerRequest $request)
    {
        DB::table('provider')->insert([
            "Name"=>$request->input('Name'),
            "Address"=>$request->input('Address'),
            "Country"=>$request->input('Country'),
            "Contact"=>$request->input('Contact'),
            "Cellphone"=>$request->input('Cellphone'),
            "Telephone"=>$request->input('Telephone'),
            "Email"=>$request->input('Email'),
            "image"=>$request->input('Image'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        $query = $request->input('Name');
        return redirect('provider/create')->with('confirmacionregistro', compact('query'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Para el buscador?
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $query = DB::table('provider')->where('Id_provider', $id)->first();
        return view('providerEdit', compact('query'));
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
        DB::table('provider')->where('Id_provider', $id)->update([
            "Name"=>$request->input('Name'),
            "Address"=>$request->input('Address'),
            "Country"=>$request->input('Country'),
            "Contact"=>$request->input('Contact'),
            "Cellphone"=>$request->input('Cellphone'),
            "Telephone"=>$request->input('Telephone'),
            "Email"=>$request->input('Email'),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('provider/index')->with('confirmacioneditar',"xxx");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('provider')->where('Id_provider', $id)->delete();
        return redirect('provider/index')->with('confirmacioneliminar',"xxx");
    }
}
