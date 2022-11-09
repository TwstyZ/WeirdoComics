<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\ControladorForms;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('consulta');
});
Route:: controller(ControladorVistas::class)->group(
    function(){
    Route:: get ('consulta','vistaConsulta')->name('c');
    Route:: get ('proveedores','vistaProveedores')->name('p');
    Route:: get ('pedidos','vistaPedidos')->name('pe');
    Route:: get ('mostrador','vistaMostrador')->name('m');
    Route:: get ('altacomic','vistaAC')->name('ac');
    Route:: get ('altaarticulo','vistaAA')->name('aa');
    Route:: get ('altavendedor','vistaAV')->name('av');
    Route:: get ('altaproveedor','vistaAP')->name('ap');
    Route:: get ('venta','vistaVenta')->name('v');
    });

    Route::post('procesarComic',[controladorForms::class,'Comic'])->name('ProcesoComic');
    Route::post('procesarArticulo',[controladorForms::class,'Articulo'])->name('ProcesoArticulo');
    Route::post('procesarVendedor',[controladorForms::class,'Vendedor'])->name('ProcesoVendedor');
    Route::post('procesarProveedor',[controladorForms::class,'Proveedor'])->name('ProcesoProveedor');
    Route::post('procesarVenta',[controladorForms::class,'Venta'])->name('ProcesoVenta');