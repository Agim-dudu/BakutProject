<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DeskripsiController;
use App\Http\Controllers\FloraFaunaController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'show'])->name('login.show');

Route::get('/register', [RegisterController::class, 'show'])->name('register.show');

Route::get('/home', [HomeController::class, 'show'])->name('home.show');

Route::get('/florafauna', [FloraFaunaController::class, 'show'])->name('florafauna.show');

Route::get('/deskripsi', [DeskripsiController::class, 'show'])->name('deskripsi.show');