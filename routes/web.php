<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\TestController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PuzzleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\florafaunaController;
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


Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);

Route::get('login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('auth/facebook/callback', [LoginController::class, 'handleFacebookCallback']);

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::get('/home', [HomeController::class, 'show'])->name('index');


Route::group(['middleware' => ['auth']], function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('puzzle', [PuzzleController::class, 'show'])->name('puzzle');

    Route::get('quiz', [QuizController::class, 'index'])->name('quiz.index');
    Route::post('quiz/submit', [QuizController::class, 'submit'])->name('quiz.submit');
});

// Route::get('/feature', function () {
//     return view('feature');
// });
// Route::get('/project', function () {
//     return view('project');
// });
// Route::get('/quote', function () {
//     return view('quote');
// });
// Route::get('/service', function () {
//     return view('service');
// });
// Route::get('/team', function () {
//     return view('team');
// });
Route::get('/', function () {
    return view('index');
});

Route::get('/order', [OrderController::class, 'index']);
Route::post('/checkout', [OrderController::class, 'checkout']);
Route::get('/invoice/{id}', [OrderController::class, 'invoice']);

Route::group(['middleware' => 'web'], function () {
    Route::resource('puzzles', florafaunaController::class)->only(['index', 'create', 'store', 'edit', 'update']);
    Route::delete('/puzzles/{puzzle}', [florafaunaController::class, 'destroy'])->name('puzzles.destroy');
});
Route::get('/puzzles/{puzzle}/edit', [florafaunaController::class, 'edit'])->name('puzzles.edit');
Route::delete('/puzzles/{puzzle}', [florafaunaController::class, 'destroy'])->name('puzzles.destroy');