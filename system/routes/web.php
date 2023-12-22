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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/info', 'InfoController@index')->name('info');

Route::get('/moge1/{id}', 'MogeController@Moge1')->name('moge1');
Route::get('/moge2/{id}', 'PemesananController@index')->name('pemesanan_motor');

Route::get('/onderdildetail/{id}', 'OnderdildetailController@Onderdildetail')->name('onderdildetail');


Route::get('/chat', 'ChatController@index')->name('chat');

Route::get('/tentangkami', 'TentangKamiController@index')->name('tentangkami');

Route::get('/promo', 'PromoController@index')->name('promo');

Route::get('/onderdil', 'OnderdilController@index')->name('onderdil');



Route::get('/motor', 'MotorController@index')->name('motor');


Route::get('/data_pemesanan','PemesananController@data_pemesanan')->name('data_pemesanan');
Route::get('hapus_pesanan/{id}','PemesananController@hapus_pemesanan')->name('hapus_pesanan');


Route::get('/pelanggan', 'PelangganController@pelanggan')->name('pelanggan');
Route::get('/profil_pelanggan', 'PelangganController@profil')->name('profil_pelanggan');


Route::get('/registrasi', 'RegistrasiController@index')->name('registrasi');
Route::post('/registrasi', 'TestLagiController@doRegistration');

Route::get('logout','LoginController@logout')->name('logout');

Route::get('/login','LoginController@pageLogin')->name('login');
Route::post('/login','TestLagiController@fnLogin');
Route::post('/fnLogin','TestLagiController@fnLogin');


Route::get('/tambah_penawaran','Admin\TambahPenawaranController@index')->name('tambah_penawaran');
Route::get('/data_pelanggan','Admin\DataPelangganController@index')->name('data_pelanggan');
Route::get('/data_promo','Admin\DataPromoController@index')->name('data_promo');