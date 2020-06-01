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

Route::get('/', function () {
    return view('frontEnd/index');
});

Route::get('/Contact', function () {
    return view('frontEnd/Contact');
});
Route::get('/shop', function () {
    return view('frontEnd/shop');
});
Route::get('/product-detail', function () {
    return view('frontEnd/product-detail');
});

