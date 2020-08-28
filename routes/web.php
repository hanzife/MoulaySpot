<?php

use Illuminate\Support\Facades\Route;

//Home Page
Route::resource('/','HomeController')->only(['index']);
//Shop Page
Route::resource('/Shop','ProductsController')->only(['index']);
Route::resource('/Shop','ProductsController')->only(['show']);
Route::get('Product/{id}','ProductsController@showItem'); 
// Route::resource('/Product/1','ProductsController')->only(['showProduct']);


Route::get('/Inscription', function () {
    return view('Inscription');
});


Route::get('/Login', function () {
    return view('Login');
});


// Route::get('/Product', function () {
//     return view('Product');
// });
