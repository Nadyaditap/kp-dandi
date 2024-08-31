<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ScheduleController;

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
Route::get('/', function(){
    return view('welcome');
});
Route::get('/login', [AuthController::class, 'login'])->name('login.form')->middleware('guest');
Route::post('/login', [AuthController::class, 'loginUser'])->name('login')->middleware('guest');

Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register.form')->middleware('guest');
Route::post('register', [RegisterController::class, 'registerUser'])->name('register')->middleware('guest');


Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/dashboard', [MasterController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/home', [MasterController::class, 'show_data'])->middleware('auth');

Route::get('/jadwal-karyawan', [ScheduleController::class, 'index'])->middleware('auth')->name('schedule.index');
Route::get('/jadwal-karyawan/create', [ScheduleController::class, 'create'])->middleware('auth')->name('schedule.create');
Route::post('/jadwal-karyawan/store', [ScheduleController::class, 'store'])->middleware('auth')->name('schedule.store');

// Pendaftaran
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index')->middleware('auth');
Route::get('/pendaftaran/create', [PendaftaranController::class, 'create'])->name('pendaftaran.create')->middleware('auth');
Route::post('/post', [PendaftaranController::class, 'store'])->name('pendaftaran.store')->middleware('auth');
Route::get('/pendaftaran/edit/{id}', [PendaftaranController::class, 'edit'])->name('pendaftaran.edit')->middleware('auth');
Route::put('pendaftaran/update/{id}', [PendaftaranController::class, 'update'])->name('pendaftaran.update')->middleware('auth');
Route::get('/delete/{id}', [PendaftaranController::class, 'delete'])->middleware('auth');
