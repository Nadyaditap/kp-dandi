<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\AuthController;

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
Route::get('/', [AuthController::class, 'login']);
Route::post('/check-login', [AuthController::class, 'proses_login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/dashboard', [MasterController::class, 'index']);
Route::get('/dashboard/home', [MasterController::class, 'show_data']);


// Pendaftaran
Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
Route::get('/pendaftaran/create', [PendaftaranController::class, 'create']);
Route::post('/post', [PendaftaranController::class, 'store']);
Route::get('/pendaftaran/edit/{id}', [PendaftaranController::class, 'edit']);
Route::put('/update/{id}', [PendaftaranController::class, 'update']);
Route::get('/delete/{id}', [PendaftaranController::class, 'delete']);
