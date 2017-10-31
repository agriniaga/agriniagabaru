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

Route::resource('/login', 'HomeController@login');
Route::resource('/register', 'HomeController@register');
Route::resource('/homepage', 'HomeController@homepage');
Route::resource('/pencarian', 'HomeController@pencarian');
Route::resource('/tips', 'HomeController@tips');
Route::resource('/syarat', 'HomeController@syarat');
Route::resource('/unggahproduk', 'HomeController@unggahproduk');
Route::resource('/belanja', 'HomeController@belanja');
