<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesrController;
use App\Http\Controllers\FloraController;
use App\Http\Controllers\Auth\LoginController;


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
    return view('home');
});
Route::get('/login/google', [LoginController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [LoginController::class, 'handleGoogleCallback']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::get('/test', [TesrController::class, 'show'])->name('test');
Route::get('/flora', [FloraController::class, 'show'])->name('flora');
