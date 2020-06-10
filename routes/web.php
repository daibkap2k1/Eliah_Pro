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
// Admin 
Route::group(['prefix'=>'admin'], function () {

    Route::group(['namespace' => 'Admin'], function () {
        Route::get('/','DashboardController@index');
    });

});







// User 

Route::get('/', function () {
    return view('frontEnd/index');
})->name('index');

Route::get('/Contact', function () {
    return view('frontEnd/Contact');
})->name('contact');
Route::get('/shop', function () {
    return view('frontEnd/shop');
})->name('shop');
Route::get('/product-detail', function () {
    return view('frontEnd/product-detail');
})->name('product-detail');

Route::get('/Checkout', function () {
    return view('frontEnd/Checkout');
})->name('checkout');

Route::get('/Cart', function () {
    return view('frontEnd/Cart');
})->name('cart');

Route::get('/Wishlist', function () {
    return view('frontEnd/Wishlist');
})->name('wishlist');

Route::get('/Error', function () {
    return view('frontEnd/Error');
});
Route::get('/blog', function () {
    return view('frontEnd/blog');
})->name('blog');
Route::get('/blog-detail', function () {
    return view('frontEnd/blog-detail');
})->name('blog-detail');
Route::get('/services', function () {
    return view('frontEnd/services');
})->name('service');
Route::get('/about', function () {
    return view('frontEnd/about');
})->name('about');

