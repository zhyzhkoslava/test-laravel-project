<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('/user')->group(function () {
    Route::get('/', [UserController::class, 'show'])->name('user.show');
    Route::post('/', [UserController::class, 'register'])->name('user.register');
    Route::post('/', [UserController::class, 'auth'])->name('user.auth');
    Route::delete('/', [UserController::class, 'delete'])->name('user.delete');
});

Route::resource('/task', TaskController::class);
