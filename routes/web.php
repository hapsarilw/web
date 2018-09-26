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
    return view('login');
});
Route::get('/halaman-kedua', function () {
    return view('halamandua');
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
Route::resource('transfer','Transfer');
Route::resource('traveller','Traveller');
Route::resource('act_traveller','ActTraveller');
Route::resource('requester','Requester');
Route::resource('act_requester','ActRequester');
Route::resource('pengguna','Pengguna');

Route::post('/displayPegawai/{id}', 'User@displayPegawai');