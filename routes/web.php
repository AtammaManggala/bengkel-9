<?php

use App\Http\Controllers\JnsKendaraancontroller;
use App\Http\Controllers\kendaraancontroller;
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
    return view('welcome');
});

//jenis kendaraan
route::get('/jnskendaraan', [JnsKendaraancontroller::class, 'index'])->name('jnsKendaraan.index');
route::get('/jnsKendaraan/add', [JnsKendaraancontroller::class, 'create'])->name('jnsKendaraan.create');
route::post('/jnsKendaraan/add', [JnsKendaraancontroller::class, 'store'])->name('jnsKendaraan.store');
route::get('/jnsKendaraan/edit/{id}', [JnsKendaraancontroller::class, 'edit'])->name('jnskendaraan.edit');
route::post('/jnsKendaraan/edit/{id}', [JnsKendaraancontroller::class, 'update'])->name('jnskendaraan.update');
route::get('/jnsKendaraan/delete/{id}', [JnsKendaraancontroller::class, 'destroy'])->name('jnskendaraan.delete');

//kendaraan
route::get('/kendaraan', [kendaraancontroller::class, 'index'])->name('kendaraan.index');
route::get('/kendaraan', [kendaraancontroller::class, 'create'])->name('kendaraan.create');
route::post('/kendaraan', [kendaraancontroller::class, 'store'])->name('kendaraan.store');



