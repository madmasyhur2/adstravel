<?php

use App\Http\Controllers\TravelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::get('/login', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/profile', [UserController::class, 'profile'])->middleware('auth')->name('profile');

Route::get('/product', [TravelController::class, 'index']);

Route::put('/user/update', 'App\Http\Controllers\UserController@update')->name('user.update');