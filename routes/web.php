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

Route::get('/index', 'adminDashboardController@dashboard')->middleware('auth');


//Login Authentication
Route::get('/login', 'authController@login')->name('login');
Route::post('/postlogin', 'authController@postlogin');
Route::get('/logout','authController@logout');


Route::group(['middleware'=>'auth'],function(){
	//Kategori Barang
	Route::get('/KaBarang', 'KaBarangController@index');
		//method create
		Route::post('/KaBarang/create', 'KaBarangController@create');
		//method edit & update
		Route::get('/KaBarang/{id_kategori}/edit', 'KaBarangController@edit');
		Route::post('/KaBarang/{id_kategori}/update', 'KaBarangController@update');
		//method delete
		Route::get('/KaBarang/{id_kategori}/delete', 'KaBarangController@delete');

	//Jenis Barang
	Route::get('/Artikel', 'ArtikelController@index');
			//method create
			Route::post('/Artikel/create', 'ArtikelController@create');
			//method edit & update
			Route::get('/Artikel/{id_jenis}/edit', 'ArtikelController@edit');
			Route::post('/Artikel/{id_jenis}/update', 'ArtikelController@update');
			//method delete
			Route::get('/Artikel/{id_jenis}/delete', 'ArtikelController@delete');

	//Gudang Barang
	Route::get('/Barang','BarangController@index');
		//method create
		Route::post('/Barang/create','BarangController@create');
		//method edit & update
		Route::get('/Barang/{id_barang}/edit','BarangController@edit');
		Route::post('/Barang/{id_barang}/update','BarangController@update');
		//method delete
		Route::get('/Barang/{id_barang}/delete', 'BarangController@delete');

	//transaki
		Route::get('/Transaksi','TransaksiController@index');
		//method create
		Route::post('/Transaksi/create','TransaksiController@create');
		//method delete
		Route::get('/Transaksi/{id_transaki}/delete', 'TransaksiController@delete');
		//method Export PDF
		Route::get('/Transaksi/exportPDF','TransaksiController@exportPDF');

	//detail
		Route::get('/detailTrans','detailTransaksiController@index');
		Route::post('/detailTrans','detailTransaksiController@index');
		Route::post('/detailTrans/create','detailTransaksiController@create');

	
});

//UserInterfaceh
Route::get('/Home', 'HomeKategoriController@index');
Route::get('/Home/{id_jenis}/Preview', 'HomeKategoriController@Preview');
Route::get('/Home/{id_kategori}/Content', 'HomeKategoriController@Content');
Route::get('/AboutUs', function () {
    return view('UserTemplate.AboutContent');
});
