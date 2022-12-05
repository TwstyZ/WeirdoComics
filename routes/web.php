<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\comicController;

use App\Http\Controllers\itemController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\providerController;
use App\Http\Controllers\saleController;
use App\Http\Controllers\sellerController;


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

Route::get('/', function () {return view('home');});
Route::get('main', function () {return view('home');})->name('home');
Route::get('comic', function () {return view('orderCreate');});


//item
//Create
Route::get('item/create', [itemController::class,'create'])->name('item.create');
//Store
Route::post('item/store', [itemController::class,'store'])->name('item.store');
//Index
Route::get('item/index', [itemController::class,'index'])->name('item.index');
//Edit
Route::get('item/{id}/edit', [itemController::class,'edit'])->name('item.edit');
//Update
Route::put('item/{id}/update', [itemController::class,'update'])->name('item.update');
//Show
Route::get('item/{id}/show', [itemController::class,'show'])->name('item.show');
//Destroy
Route::delete('item/{id}/destroy', [itemController::class,'destroy'])->name('item.destroy');

//comic
//Create
Route::get('comic/create', [comicController::class,'create'])->name('comic.create');
//Store
Route::post('comic/store', [comicController::class,'store'])->name('comic.store');
//Index
Route::get('comic/index', [comicController::class,'index'])->name('comic.index');
//Show
Route::post('comic/show', [comicController::class,'show'])->name('comic.show');
//Edit
Route::get('comic/{id}/edit', [comicController::class,'edit'])->name('comic.edit');
//Update
Route::put('comic/{id}/update', [comicController::class,'update'])->name('comic.update');
//Destroy
Route::delete('comic/{id}/destroy', [comicController::class,'destroy'])->name('comic.destroy');

//provider
//Create
Route::get('provider/create', [providerController::class,'create'])->name('provider.create');
//Store
Route::post('provider/store', [providerController::class,'store'])->name('provider.store');
//Index
Route::get('provider/index', [providerController::class,'index'])->name('provider.index');
//Edit
Route::get('provider/{id}/edit', [providerController::class,'edit'])->name('provider.edit');
//Update
Route::put('provider/{id}/update', [providerController::class,'update'])->name('provider.update');
//Show
Route::get('provider/{id}/show', [providerController::class,'show'])->name('provider.show');
//Destroy
Route::delete('provider/{id}/destroy', [providerController::class,'destroy'])->name('provider.destroy');

//sale
//Create
Route::get('sale/create', [saleController::class,'create'])->name('sale.create');
//Store
Route::post('sale/store', [saleController::class,'store'])->name('sale.store');
//Index
Route::get('sale/index', [saleController::class,'index'])->name('sale.index');
//Edit
Route::get('sale/{id}/edit', [saleController::class,'edit'])->name('sale.edit');
//Update
Route::put('sale/{id}/update', [saleController::class,'update'])->name('sale.update');
//Show
Route::get('sale/{id}/show', [saleController::class,'show'])->name('sale.show');
//Destroy
Route::delete('sale/{id}/destroy', [saleController::class,'destroy'])->name('sale.destroy');

//order
//Create
Route::get('order/create', [orderController::class,'create'])->name('order.create');
//Store
Route::post('order/store', [orderController::class,'store'])->name('order.store');
//Index
Route::get('order/index', [orderController::class,'index'])->name('order.index');
//Edit
Route::get('order/{id}/edit', [orderController::class,'edit'])->name('order.edit');
//Update
Route::put('order/{id}/update', [orderController::class,'update'])->name('order.update');
//Show
Route::get('order/{id}/show', [orderController::class,'show'])->name('order.show');
//Destroy
Route::delete('order/{id}/destroy', [orderController::class,'destroy'])->name('order.destroy');

//seller
//Create
Route::get('seller/create', [sellerController::class,'create'])->name('seller.create');
//Store
Route::post('seller/store', [sellerController::class,'store'])->name('seller.store');
//Index
Route::get('seller/index', [sellerController::class,'index'])->name('seller.index');
//Edit
Route::get('seller/{id}/edit', [sellerController::class,'edit'])->name('seller.edit');
//Update
Route::put('seller/{id}/update', [sellerController::class,'update'])->name('seller.update');
//Show
Route::get('seller/{id}/show', [sellerController::class,'show'])->name('seller.show');
//Destroy
Route::delete('seller/{id}/destroy', [sellerController::class,'destroy'])->name('seller.destroy');


