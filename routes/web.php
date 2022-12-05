<?php

use Illuminate\Support\Facades\Route;


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
Route::get('comic', function () {return view('comicCreate');});


//item
//Create
Route::get('item/create', [controllerCustomer::class,'create'])->name('item.create');
//Store
Route::post('item/store', [controllerCustomer::class,'store'])->name('item.store');
//Index
Route::get('item/index', [controllerCustomer::class,'index'])->name('item.index');
//Edit
Route::get('item/{id}/edit', [controllerCustomer::class,'edit'])->name('item.edit');
//Update
Route::put('item/{id}/update', [controllerCustomer::class,'update'])->name('item.update');
//Show
Route::get('item/{id}/show', [controllerCustomer::class,'show'])->name('item.show');
//Destroy
Route::delete('item/{id}/destroy', [controllerCustomer::class,'destroy'])->name('item.destroy');

//comic
//Create
Route::get('comic/create', [controllerCustomer::class,'create'])->name('comic.create');
//Store
Route::post('comic/store', [controllerCustomer::class,'store'])->name('comic.store');
//Index
Route::get('comic/index', [controllerCustomer::class,'index'])->name('comic.index');
//Edit
Route::get('comic/{id}/edit', [controllerCustomer::class,'edit'])->name('comic.edit');
//Update
Route::put('comic/{id}/update', [controllerCustomer::class,'update'])->name('comic.update');
//Show
Route::get('comic/{id}/show', [controllerCustomer::class,'show'])->name('comic.show');
//Destroy
Route::delete('comic/{id}/destroy', [controllerCustomer::class,'destroy'])->name('comic.destroy');

//provider
//Create
Route::get('provider/create', [controllerCustomer::class,'create'])->name('provider.create');
//Store
Route::post('provider/store', [controllerCustomer::class,'store'])->name('provider.store');
//Index
Route::get('provider/index', [controllerCustomer::class,'index'])->name('provider.index');
//Edit
Route::get('provider/{id}/edit', [controllerCustomer::class,'edit'])->name('provider.edit');
//Update
Route::put('provider/{id}/update', [controllerCustomer::class,'update'])->name('provider.update');
//Show
Route::get('provider/{id}/show', [controllerCustomer::class,'show'])->name('provider.show');
//Destroy
Route::delete('provider/{id}/destroy', [controllerCustomer::class,'destroy'])->name('provider.destroy');

//sale
//Create
Route::get('sale/create', [controllerCustomer::class,'create'])->name('sale.create');
//Store
Route::post('sale/store', [controllerCustomer::class,'store'])->name('sale.store');
//Index
Route::get('sale/index', [controllerCustomer::class,'index'])->name('sale.index');
//Edit
Route::get('sale/{id}/edit', [controllerCustomer::class,'edit'])->name('sale.edit');
//Update
Route::put('sale/{id}/update', [controllerCustomer::class,'update'])->name('sale.update');
//Show
Route::get('sale/{id}/show', [controllerCustomer::class,'show'])->name('sale.show');
//Destroy
Route::delete('sale/{id}/destroy', [controllerCustomer::class,'destroy'])->name('sale.destroy');

//order
//Create
Route::get('order/create', [controllerCustomer::class,'create'])->name('order.create');
//Store
Route::post('order/store', [controllerCustomer::class,'store'])->name('order.store');
//Index
Route::get('order/index', [controllerCustomer::class,'index'])->name('order.index');
//Edit
Route::get('order/{id}/edit', [controllerCustomer::class,'edit'])->name('order.edit');
//Update
Route::put('order/{id}/update', [controllerCustomer::class,'update'])->name('order.update');
//Show
Route::get('order/{id}/show', [controllerCustomer::class,'show'])->name('order.show');
//Destroy
Route::delete('order/{id}/destroy', [controllerCustomer::class,'destroy'])->name('order.destroy');

//seller
//Create
Route::get('seller/create', [controllerCustomer::class,'create'])->name('seller.create');
//Store
Route::post('seller/store', [controllerCustomer::class,'store'])->name('seller.store');
//Index
Route::get('seller/index', [controllerCustomer::class,'index'])->name('seller.index');
//Edit
Route::get('seller/{id}/edit', [controllerCustomer::class,'edit'])->name('seller.edit');
//Update
Route::put('seller/{id}/update', [controllerCustomer::class,'update'])->name('seller.update');
//Show
Route::get('seller/{id}/show', [controllerCustomer::class,'show'])->name('seller.show');
//Destroy
Route::delete('seller/{id}/destroy', [controllerCustomer::class,'destroy'])->name('seller.destroy');


