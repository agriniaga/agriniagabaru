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
    return view('welcome');
});

//Auth
Auth::routes();

//Authenticated
Route::get('/homepage', 'HomeController@homepage');
Route::get('/home', 'HomeController@homepage');
Route::get('/pencarian', 'HomeController@pencarian');
Route::get('/unggahproduk', 'HomeController@unggahproduk');


//Guest
Route::get('/tips', 'guestController@tips');
Route::get('/syarat', 'guestController@syarat');
