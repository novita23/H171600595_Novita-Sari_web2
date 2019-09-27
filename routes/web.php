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


Auth::routes();


Route::get('/kategori_artikel', 'kategoriArtikelController@index')->name('kategori_artikel.index');
Route::get('/kategori_berita', 'KategoriBeritaController@index')->name('kategori_berita.index');
Route::get('/kategori_galeri', 'KategoriGaleriController@index')->name('kategori_galeri.index');
Route::get('/kategori_pengumuman', 'KategoriPengumumanController@index')->name('kategori_pengumuman.index');

Route::get('/artikel', 'ArtikelController@index')->name('artikel.index');
Route::get('/berita', 'BeritaController@index')->name('berita.index');
Route::get('/galeri', 'GaleriController@index')->name('galeri.index');
Route::get('/pengumuman', 'PengumumanController@index')->name('pengumuman.index');

Route::get('/home', 'HomeController@index')->name('home');



Route::get('login', 'HomeController@myCaptcha')->name('myCaptcha');
Route::post('login', 'HomeController@myCaptchaPost')->name('myCaptcha.post');
Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');