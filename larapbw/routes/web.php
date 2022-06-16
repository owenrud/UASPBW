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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {

Route::get('/mahasiswa',[App\Http\Controllers\MahasiswaController::class,'mhs']);
Route::get('/mahasiswa/cari', [App\Http\Controllers\MahasiswaController::class,'cari']);
Route::get('/form', [App\Http\Controllers\MahasiswaController::class,'formmhs']);
Route::post('/mahasiswa/simpan', [App\Http\Controllers\MahasiswaController::class,'simpan']);
Route::get('/form/edit/{id}', [App\Http\Controllers\MahasiswaController::class,'formeditmhs']);
Route::put('/mahasiswa/update/{id}', [App\Http\Controllers\MahasiswaController::class,'updatemhs']);
Route::get('/mahasiswa/hapus/{id}', [App\Http\Controllers\MahasiswaController::class,'hapusmhs']);
Route::get('/user', [App\Http\Controllers\AuthController::class,'user']);
Route::get('/user/dashboard', [App\Http\Controllers\AuthController::class,'userdashboard']);

});

Route::get('/login',[App\Http\Controllers\AuthController::class,'login'])->middleware('guest')->name('login');
Route::get('/formuser', [App\Http\Controllers\AuthController::class,'formuser']);
Route::post('/user/simpan', [App\Http\Controllers\AuthController::class,'simpanuser']);
Route::get('/formuser/edit/{id}', [App\Http\Controllers\AuthController::class,'formedituser']);
Route::put('/user/update/{id}', [App\Http\Controllers\AuthController::class,'updateuser']);
Route::get('/user/hapus/{id}', [App\Http\Controllers\AuthController::class,'hapususer']);
Route::post('/user/ceklogin', [App\Http\Controllers\AuthController::class,'ceklogin']);
Route::get('/logout', [App\Http\Controllers\AuthController::class,'logout']);