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
    return view('home');
});


Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/policies', function () {
    return view('policies');
});

Route::get('/offers', function() {
    return view( 'offers');
});


//Route::get('/test', function (){
//    return view('test');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
