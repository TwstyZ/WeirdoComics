<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorArticulos;
use App\Http\Requests\ValidadorComics;
use App\Http\Requests\ValidadorProveedor;
use App\Http\Requests\ValidadorVendedor;
use App\Http\Requests\ValidadorVenta;

class controladorForms extends Controller
{
    public function Comic(ValidadorComics $req){
    return redirect()->route('ac')->with('confirmacion','correcto');
} 
public function Articulo(ValidadorArticulos $req){
    return redirect()->route('aa')->with('confirmacion','correcto');
} 
public function Proveedor(ValidadorProveedor $req){
    return redirect()->route('ap')->with('confirmacion','correcto');
} 
public function Vendedor(ValidadorVendedor $req){
    return redirect()->route('av')->with('confirmacion','correcto');
} 
public function Venta(ValidadorVenta $req){
    return redirect()->route('v')->with('confirmacion','correcto');
} 
}
