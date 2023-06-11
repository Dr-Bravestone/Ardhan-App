<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProvinsiController;
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

Route::get('/halo', function () {
    return "Halo semua";
});

Route::get('/profil/{nama?}/{pekerjaan?}', function ($nama = "Athallah", $pekerjaan = "Mahasiswa") {
    echo "<>Nama saya $nama, pekerjaan $pekerjaan";
});

Route::get('/dosen', function () {
    return view('dosen');
});

Route::get('/jadwal', function () {
    return view('jadwal.index');
});

// Route::get('/fakultas', function () {
//     return view('fakultas.index')->with('fakultas',["FIKR", "FEB"]);
// });

route::resource('fakultas', FakultasController::class);

route::resource('provinsi', ProvinsiController::class);

route::resource('prodi', ProdiController::class);

route::resource('Mahasiswa', MahasiswaController::class);

