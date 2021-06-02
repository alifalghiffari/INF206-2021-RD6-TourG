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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('profil');
});


Auth::routes();

Route::group(['middleware' => ['auth', 'ceklevel:User']], function() {

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/aktivitas', [App\Http\Controllers\AktivitasController::class, 'index'])->name('aktivitas');
Route::get('/pemberitahuan', [App\Http\Controllers\PemberitahuanController::class, 'index'])->name('pemberitahuan');
Route::get('/menu', [App\Http\Controllers\PermainanController::class, 'index'])->name('menu');
Route::get('/permainan', [App\Http\Controllers\PermainanController::class, 'permainan'])->name('permainan');

});

Route::group(['middleware' => ['auth', 'ceklevel:Admin']], function() {

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('indexadmin');
Route::get('/aktadmin', [App\Http\Controllers\AdminController::class, 'aktivitas'])->name('aktivitasadmin');
Route::get('/pembadmin', [App\Http\Controllers\AdminController::class, 'pemberitahuan'])->name('pemberitahuanadmin');

});