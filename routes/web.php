<?php

use App\Http\Controllers\UjianController;
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

// get, post, put, delete

Route::get('/ujian', [UjianController::class, 'index'])->name('ujian');
Route::get('/ujian/tambah', [UjianController::class, 'tambah'])->name('ujian.tambah');
Route::post('ujian/tambah', [UjianController::class, 'aksi_tambah']);
Route::get('/ujian/edit/{id}', [UjianController::class, 'edit'])->name('ujian.edit');
Route::put('/ujian/edit/{id}', [UjianController::class, 'aksi_edit']);
Route::delete('/ujian/delete/{id}', [UjianController::class, 'delete']);
