<?php

use App\Http\Controllers\PelatihanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pelatihan', [PelatihanController::class, 'tampil'])->name('pelatihan.tampil');
Route::get('/pelatihan/tambah', [PelatihanController::class, 'tambah'])->name('pelatihan.tambah');
Route::post('/pelatihan/submit', [PelatihanController::class, 'submit'])->name('pelatihan.submit');
Route::get('/pelatihan/edit/{id}', [PelatihanController::class, 'edit'])->name('pelatihan.edit');
Route::post('/pelatihan/update/{id}', [PelatihanController::class, 'update'])->name('pelatihan.update');
Route::post('/pelatihan/delete/{id}', [PelatihanController::class, 'delete'])->name('pelatihan.delete');

