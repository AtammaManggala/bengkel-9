<?php

use App\Http\Controllers\detailServicecontroller;
use App\Http\Controllers\JnsKendaraancontroller;
use App\Http\Controllers\jnsServicecontroller;
use App\Http\Controllers\kendaraancontroller;
use App\Http\Controllers\mekanikcontroller;
use App\Http\Controllers\pemilikcontroller;
use App\Http\Controllers\servicecontroller;
use App\Models\jnsKendaraan;
use App\Models\service;
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

//mekanik 
route::get('/mekanik', [mekanikcontroller::class, 'index'])->name('mekanik.index');
route::get('/mekanik/add', [mekanikcontroller::class, 'create'])->name('mekanik.create');
route::post('/mekanik/add', [mekanikcontroller::class, 'store'])->name('mekanik.store');
route::get('/mekanik/edit/{id}', [mekanikcontroller::class, 'edit'])->name('mekanik.edit');
route::post('/mekanik/edit/{id}', [mekanikcontroller::class, 'update'])->name('mekanik.update');
route::get('/mekanik/delete/{id}', [mekanikcontroller::class, 'destroy'])->name('mekanik.delete');

//service 
route::get('/service', [servicecontroller::class, 'index'])->name('service.index');
route::get('/service/add', [servicecontroller::class, 'create'])->name('service.create');
route::post('/service/add', [servicecontroller::class, 'store'])->name('service.store');
route::get('/service/edit/{id}', [servicecontroller::class, 'edit'])->name('service.edit');
route::post('/service/edit/{id}', [servicecontroller::class, 'update'])->name('service.update');
route::get('/service/delete/{id}', [servicecontroller::class, 'destroy'])->name('service.delete');

//jenis service
route::get('/jnsservice', [jnsServicecontroller::class, 'index'])->name('jnsService.index');
route::get('/jnsservice/add', [jnsServicecontroller::class, 'create'])->name('jnsService.create');
route::post('/jnsservice/add', [jnsServicecontroller::class, 'store'])->name('jnsService.store');
route::get('/jnsservice/edit/{id}', [jnsServicecontroller::class, 'edit'])->name('jnsService.edit');
route::post('/jnsservice/edit/{id}', [jnsServicecontroller::class, 'update'])->name('jnsService.update');
route::get('/jnsservice/delete/{id}', [jnsServicecontroller::class, 'destroy'])->name('jnsService.delete');

//detail service
route::get('/detailservice', [detailServicecontroller::class, 'index'])->name('detailService.index');
route::get('/detailservice/add', [detailServicecontroller::class, 'create'])->name('detailService.create');
route::post('/detailservice/add', [detailServicecontroller::class, 'store'])->name('detailService.store');
route::get('/detailservice/edit/{id}', [detailServicecontroller::class, 'edit'])->name('detailService.edit');
route::post('/detailservice/edit/{id}', [detailServicecontroller::class, 'update'])->name('detailService.update');
route::get('/detailservice/delete/{id}', [detailServicecontroller::class, 'destroy'])->name('detailService.delete');