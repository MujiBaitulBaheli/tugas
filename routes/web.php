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

// Route::get('/', function () {
   // return view('welcome');
// });

Route::get('/', [App\Http\Controllers\AboutController::class, 'index'] );
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'] )->name('about');

Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'] )->name('homee');
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'index'] )->name('mahasiswa.edit');
Route::delete('/mahasiswa/{id}/delete', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');

// Route::view('/about', 'about');

Route::view('/login', 'login');
Route::get('/tentang/{berapa}', [App\Http\Controllers\AboutController::class, 'about'] );
Route::get('/penerbit', [App\Http\Controllers\AboutController::class, 'penerbit'] );

Route::get('/kelas', [App\Http\Controllers\KelasController::class, 'index'] )->name('homee');
Route::get('/kelas/{id}/edit', [KelasController::class, 'index'] )->name('kelas.edit');
Route::delete('/kelas/{id}/delete', [KelasController::class, 'destroy'])->name('kelas.delete');

Route::get('/tugas', [App\Http\Controllers\TugasController::class, 'index'] )->name('homee');
Route::get('/tugas/{id}/edit', [TugasController::class, 'index'] )->name('tugas.edit');
Route::delete('/tugas/{id}/delete', [TugasController::class, 'destroy'])->name('tugas.delete');


Route::get('/mahasiswa',[App\Http\Controllers\MahasiswaController::class, 'index'] );
