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

//Guest
Route::get('/tips', 'guestController@tips');
Route::get('/syarat', 'guestController@syarat');

//pencarian
Route::get('/pencarian', function(){
	return redirect('/homepage');
});
Route::get('/pencarian/{provinsi}/{kategori}/{nama_produk}','produkController@searchWithName');
Route::get('/pencarian/{provinsi}/{kategori}','produkController@searchWithoutName');
Route::post('/produk/search', 'produkController@produkSearch');

//arif
Route::resource('/unggahproduk', 'HomeController@unggahproduk');
Route::resource('/belanja', 'HomeController@belanja');
Route::resource('/profil', 'HomeController@profil');
Route::resource('/produk', 'HomeController@produk');
Route::resource('/pemesanan', 'HomeController@pemesanan');

Route::resource('/manajemenakun', 'AdminController@manajemenakun');
