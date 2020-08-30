<?php

use Illuminate\Support\Facades\Route;

//Home Page
Route::resource('/','HomeController')->only(['index']);
//Shop Page
Route::resource('/Shop','ProductsController')->only(['index']);
Route::resource('/Shop','ProductsController')->only(['show']);
Route::get('Product/{id}','ProductsController@showItem'); 
Route::get('Product/{id}/AddCarte','ProductsController@AddCarte')->name('AddCarte');
Route::get('Product/{id}/Like','ProductsController@Like')->name('Like');
//Carte and Customer Details
Route::get('ShoppingCarte','CustomerController@ShoppingCarte');
Route::get('ShoppingCarte/{id}/remove','CustomerController@removeCarte');


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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
