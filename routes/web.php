<?php

use App\Http\Controllers\LaporanHarianController;
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

Route::controller(LaporanHarianController::class)->group(function(){
    Route::get('/', 'index')->name('laporan-harian.index');
    Route::get('/admin', 'admin')->name('laporan-harian.admin');
    Route::get('/laporan-harian/create', 'create')->name('laporan-harian.create');
    Route::post('/laporan-harian', 'store')->name('laporan-harian.store');
    Route::get('/laporan-harian/{id}', 'show')->name('laporan-harian.show');
    Route::get('/laporan-harian/{id}/edit', 'edit')->name('laporan-harian.edit');
    Route::put('/laporan-harian/{id}', 'update')->name('laporan-harian.update');
    Route::delete('/laporan-harian/{id}', 'destroy')->name('laporan-harian.destroy');
});
