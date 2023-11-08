<?php

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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/list-mahasiswa', function () {
//     return view('kartu-mahasiswa');
// });

use App\Http\Controllers\dataMahasiswaController;

//Route::resource('mahasiswa', 'dataMahasiswaController');

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/mahasiswa', [dataMahasiswaController::class, 'index']);
Route::get('/tambah-mahasiswa', [dataMahasiswaController::class, 'create']);
Route::post('/tambah-mahasiswa', [dataMahasiswaController::class, 'store']);

Route::get('/edit-mahasiswa/{mahasiswa}', [dataMahasiswaController::class, 'edit']);
Route::put('/edit-mahasiswa/{mahasiswa}', [dataMahasiswaController::class, 'update']);

Route::delete('/hapus-mahasiswa/{mahasiswa}', [dataMahasiswaController::class, 'destroy']);

//Route::get('/list-mahasiswa', [dataMahasiswaController::class, 'index']);
