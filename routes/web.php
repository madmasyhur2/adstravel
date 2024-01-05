<?php

use App\Http\Controllers\TravelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', [TravelController::class, 'index']);

Route::get('/login', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth')->name('profile');

Route::put('/user/update', 'App\Http\Controllers\UserController@update')->name('user.update');

Route::prefix('product')->group(function () {
    Route::get('/', [TravelController::class, 'index'])->name('product');
    Route::get('/{id}', [TravelController::class, 'show']);
    Route::get('/{id}/transaction', [TransactionController::class, 'show'])->middleware('auth');
    Route::post('/transaction', [TransactionController::class, 'transaction'])->middleware('auth');
});