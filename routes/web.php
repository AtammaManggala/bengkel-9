<?php

use App\Http\Controllers\JnsKendaraancontroller;
use App\Http\Controllers\kendaraancontroller;
use App\Http\Controllers\pemilikcontroller;
use App\Models\jnsKendaraan;
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
    return view('dashboard');
});

//jenis kendaraan
route::get('/jnskendaraan', [JnsKendaraancontroller::class, 'index'])->name('jnsKendaraan.index');
route::get('/jnsKendaraan/add', [JnsKendaraancontroller::class, 'create'])->name('jnsKendaraan.create');
route::post('/jnsKendaraan/add', [JnsKendaraancontroller::class, 'store'])->name('jnskendaraan.store');
route::get('/jnsKendaraan/edit/{id}', [JnsKendaraancontroller::class, 'edit'])->name('jnskendaraan.edit');
route::post('/jnsKendaraan/edit/{id}', [JnsKendaraancontroller::class, 'update'])->name('jnskendaraan.update');
route::get('/jnsKendaraan/delete/{id}', [JnsKendaraancontroller::class, 'destroy'])->name('jnskendaraan.delete');

//kendaraan
route::get('/kendaraan', [kendaraancontroller::class, 'index'])->name('kendaraan.index');
route::get('/kendaraan/add', [kendaraancontroller::class, 'create'])->name('kendaraan.create');
route::post('/kendaraan/add', [kendaraancontroller::class, 'store'])->name('kendaraan.store');
route::get('/kendaraan/edit/{id}', [kendaraancontroller::class, 'edit'])->name('kendaraan.edit');
route::post('/kendaraan/edit/{id}', [kendaraancontroller::class, 'update'])->name('kendaraan.update');
route::get('/kendaraan/delete/{id}', [kendaraancontroller::class, 'destroy'])->name('kendaraan.delete');

//pemilik
route::get('/pemilik', [pemilikcontroller::class, 'index'])->name('pemilik.index');
route::get('/pemilik/add', [pemilikcontroller::class, 'create'])->name('pemilik.create');
route::post('/pemilik/add', [pemilikcontroller::class, 'store'])->name('pemilik.store');
route::get('/pemilik/edit/{id}', [pemilikcontroller::class, 'edit'])->name('pemilik.edit');
route::post('/pemilik/edit/{id}', [pemilikcontroller::class, 'update'])->name('pemilik.update');
route::get('/pemilik/delete/{id}', [pemilikcontroller::class, 'destroy'])->name('pemilik.delete');


