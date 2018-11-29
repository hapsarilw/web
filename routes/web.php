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

Route::get('/home', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/halaman-kedua', function () {
    return view('halamandua');
});
Route::get('/transfer', function () {
    return view('transfer');
});
Route::get('/receive', function () {
    return view('receive');
});
Route::get('/postStatus', function () {
    return view('postStatus');
});
Route::get('/show_barang', function () {
    return view('show_barang');
});
Route::get('/transaksi', function () {
    return view('transaksi');
});

//ROUTE LOGIN REGISTER DAN LOGOUT
Route::get('/home_user', 'User@index');
Route::get('/login', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');

Route::resource('barang','Barang');
Route::resource('user','User');
Route::resource('tb_user','TbUser');
Route::resource('post_rq','PostRQ');
//Route::resource('transfer','Transfer');
Route::resource('traveller','Traveller');
Route::resource('act_traveller','ActTraveller');
Route::resource('requester','Requester');
Route::resource('act_requester','ActRequester');
Route::resource('pengguna','Pengguna');
Route::resource('post_rq','PostRQ');

Route::post('/displayPegawai/{id}', 'User@displayPegawai');

Route::post('/post_rq/{id}', 'PostRQ@updateStatus');
Route::patch('updateStatus/{PostRQ}', 'PostRQ@updateStatus');

Route::get('show_barang/{id}', 'Barang@show')->name('show_barang');

Route::get('firebase','FirebaseController@index');
Route::get('/dummy', function(){
    return view('dummy');
});
Route::get('/read_dummy', function(){
    return view('readDummy');
});
