<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function vistaConsulta(){
        
    return view('consulta');
    }
    public function vistaProveedores(){
    
    return view('proveedores');
    }
    public function vistaPedidos(){

    return view('pedidos');
    }
    public function vistaAC(){

    return view('altacomic');
    }
    public function vistaAA(){

    return view('altaarticulo');
    }
    public function vistaAP(){

    return view('altaproveedor');
    } 
    public function vistaAV(){

    return view('altavendedor');
    }
    public function vistaVenta(){

    return view('venta');
    }
    public function vistaMostrador(){
        
    return view('mostrador');
    }
    
}
