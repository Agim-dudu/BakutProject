<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;

use Laravel\Socialite\Facades\Socialite;
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


Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);

Route::get('login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('auth/facebook/callback', [LoginController::class, 'handleFacebookCallback']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/login', [LoginController::class, 'show'])->name('login');


// Route::get('/test', [TestController::class, 'show'])->name('test');
Route::get('/home', [HomeController::class, 'show'])->name('index');

// Route::get('/contact', function () {
//     return view('contact');
// });
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

