<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;




Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/isiform', [AuthController::class, 'isiform']);

// LOGIN
Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/ceklogin', [AuthController::class, 'ceklogin']);

Route::middleware(['auth'])->group(function () {
 Route::get('/user', [AuthController::class, 'user']);
 Route::get('/', [AuthController::class, 'home']);
 Route::get('/logout', [AuthController::class, 'logout']);
 Route::get('/pencarianuser', [AuthController::class, 'pencarian']);
 Route::get('/delete-user/{id}', [AuthController::class, 'destroy']);
});
