<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/datamahasiswa',[App\Http\Controllers\MahasiswaAPIController::class,'getAll']);
Route::get('/datamahasiswa/{id}',[App\Http\Controllers\MahasiswaAPIController::class,'getID']);
Route::put('/update/mahasiswa',[App\Http\Controllers\MahasiswaAPIController::class,'Updatemahasiswa']);
Route::post('/create/mahasiswa',[App\Http\Controllers\MahasiswaAPIController::class,'Insertmahasiswa']);
Route::delete('/delete/mahasiswa',[App\Http\Controllers\MahasiswaAPIController::class,'Deletemahasiswa']);