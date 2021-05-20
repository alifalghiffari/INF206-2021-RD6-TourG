<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/aktivitas', function () {
    return view('aktivitas');
});

Route::get('/pemberitahuan', function () {
    return view('Pemberitahuan');
});

Route::get('/permainan', function () {
    return view('permainan');
});

Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login','App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout','App\Http\Controllers\AuthController@logout')->name('logout');
// auth
// auth -> admin || editor

Route::group(['middleware' => ['auth']],function (){
    Route::group(['middleware'=> ['cek_login:admin']],function(){
        Route::get('admin','App\Http\Controllers\AdminController@index')->name('admin');
    });

    Route::group(['middleware'=> ['cek_login:user']],function(){
        Route::get('user','App\Http\Controllers\UserController@index')->name('user');
    });

});

Route::get('/login', function () {
    return view('login');
});
