<?php

use App\Http\Controllers\JnsKendaraancontroller;
use App\Http\Controllers\kendaraancontroller;
use App\Models\jnsKendaraan;
use App\Models\kendaraan;
use App\Models\pemilik;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//jenis kendaraan
route::get('/jnskendaraan', [JnsKendaraancontroller::class, 'index'])->name('jnsKendaraan.index');
route::get('/jnsKendaraan/add', [JnsKendaraancontroller::class, 'create'])->name('jnsKendaraan.create');
route::post('/jnsKendaraan/add', [JnsKendaraancontroller::class, 'store'])->name('jnsKendaraan.store');
route::get('/jnsKendaraan/edit/{id}', [JnsKendaraancontroller::class, 'edit'])->name('jnskendaraan.edit');
route::post('/jnsKendaraan/edit/{id}', [JnsKendaraancontroller::class, 'update'])->name('jnskendaraan.update');
route::get('/jnsKendaraan/delete/{id}', [JnsKendaraancontroller::class, 'destroy'])->name('jnskendaraan.delete');

///route kendaraan
Route::get('/Kendaraan', [kendaraan::class, 'index'])->name('Kendaraan.index');
Route::get('/Kendaraan/add', [Kendaraan::class, 'create'])->name('Kendaraan.create');
Route::post('/Kendaraan/add', [Kendaraan::class, 'store'])->name('Kendaraan.store');
Route::get('/Kendaraan/edit/{id_kendaraan}', [Kendaraan::class, 'edit'])->name('Kendaraan.edit');
Route::post('/Kendaraan/update/{id_kendaraan}', [Kendaraan::class, 'update'])->name('Kendaraan.update');
Route::get('/Kendaraan/delete/{id_kendaraan}', [Kendaraan::class, 'destroy'])->name('Kendaraan.delete');

//route pemilik
Route::get('/pemilik', [pemilik::class, 'index'])->name('Pemilik.index');
Route::get('/pemilik/add', [pemilik::class, 'create'])->name('Pemilik.create');
Route::post('/pemilik/add', [pemilik::class, 'store'])->name('Pemilik.store');
Route::get('/pemilik/edit/{id_pemilik}', [pemilik::class, 'edit'])->name('Pemilik.edit');
Route::post('/pemilik/update/{id_pemilik}', [pemilik::class, 'update'])->name('Pemilik.update');
Route::get('/pemilik/delete/{id_pemilik}', [pemilik::class, 'destroy'])->name('Pemilik.delete');

