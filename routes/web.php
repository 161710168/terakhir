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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/bebas','FrontendController');
Route::get('/','FrontendController@index');

Auth::routes();



Route::group(['prefix'=> 'admin' , 'middleware' =>['auth','role:admin']], function (){
    Route::resource('siswa','SiswaController');
    Route::resource('kelas','KelasController');
    Route::resource('absensi','AbsensiController');
    Route::resource('keterangan','KeteranganController');

});
Route::get('/home', 'HomeController@index')->name('home');
