<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('signin');
})->name('signin');
Route::get('/signup-page', function () {
    return view('signup');
})->name('signup');

Route::get('/home', [ShowController::class, 'show'])->middleware('auth')->name('home');

Route::get('/add_dosen', [CRUDController::class, 'form_dosen'])->middleware('auth');
Route::post('/save_dosen', [CRUDController::class, 'add_dosen'])->middleware('auth');
Route::get('/edit_dosen/{id}', [CRUDController::class, 'edit_dosen'])->middleware('auth');
Route::put('/update_dosen/{id}', [CRUDController::class, 'update_dosen'])->middleware('auth');
Route::delete('/delete_dosen/{id}', [CRUDController::class, 'delete_dosen'])->middleware('auth');


Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/registrasi-user', [AuthController::class, 'registrasi'])->name('registrasi-user');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
