<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('bookIndex', compact('query'));
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
    public function store(Request $request)
    {
        DB::table('tb_book')->insert([
            "isbn"=>$request->input('isbn'),
            "title"=>$request->input('title'),
            "author"=>$request->input('author'),
            "number_page"=>$request->input('pages'),
            "editorial_name"=>$request->input('editorial'),
            "editorial_email"=>$request->input('editorialEmail'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
        $query = $request->input('title');
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
            "Isbn"=>$request->input('isbn'),
            "Title"=>$request->input('title'),
            "Author"=>$request->input('author'),
            "Number_page"=>$request->input('pages'),
            "Editorial_name"=>$request->input('editorial'),
            "Editorial_email"=>$request->input('editorialEmail'),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('provider/index')->with('confirmacioneditar');
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
        return redirect('provider/index')->with('confirmacioneliminar');
    }
}
