<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesrController;
use App\Http\Controllers\FloraController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\FasilitasController;
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

Route::get('/fasilitas1', [FasilitasController::class, 'show1'])->name('fasilitas1');
Route::get('/fasilitas2', [FasilitasController::class, 'show2'])->name('fasilitas2');
Route::get('/fasilitas3', [FasilitasController::class, 'show3'])->name('fasilitas3');
Route::get('/fasilitas4', [FasilitasController::class, 'show4'])->name('fasilitas4');

// Route::get('/tiket', [TiketController::class, 'show'])->name('tiket');
// Route::post('/bayar', [TiketController::class, 'show1'])->name('bayar');

Route::get('/order', [OrderController::class, 'index']);
Route::post('/checkout', [OrderController::class, 'checkout']);
Route::get('/invoice/{id}', [OrderController::class, 'invoice']);




