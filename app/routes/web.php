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
    return view('welcome');
});

Route::get('utama', function () {
    return view('home');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/aktivitas', function () {
    return view('aktivitas');
});

Route::get('/pemberitahuan', function () {
    return view('pemberitahuan');
});

Route::get('/permainan', function () {
    return view('permainan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
