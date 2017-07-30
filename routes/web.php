<?php

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
    return view('/home/home');
});


Route::get('/gallery', function () {
    return view('/gallery/gallery');
});

Route::get('/contact', function () {
    return view('/contact/contact');
});

Route::get('/product', function () {
    return view('/product/product');
});

Route::get('/policies', function () {
    return view('/policies/policies');
});

Route::get('/offers', function() {
    return view( '/offers/offers');
});


//Route::get('/test', function (){
//    return view('test');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
