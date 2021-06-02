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

Route::get('/utama', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/aktivitas', [App\Http\Controllers\AktivitasController::class, 'index'])->name('aktivitas');
Route::get('/pemberitahuan', [App\Http\Controllers\PemberitahuanController::class, 'index'])->name('pemberitahuan');
Route::get('/menu', [App\Http\Controllers\PermainanController::class, 'index'])->name('menu');
Route::get('/menu/permainan', [App\Http\Controllers\PermainanController::class, 'utama'])->name('utama');
