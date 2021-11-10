<?php

use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome');

Route::prefix('auth')->group(function () {
    Route::get('register',[RegisterController::class,'create'])->name('show-register')->middleware('guest');
    Route::post('register', [RegisterController::class,'store'])->name('do-register')->middleware('guest');
    Route::get('login',[LoginController::class,'create'])->name('show-login')->middleware('guest');
    Route::post('login', [LoginController::class,'store'])->name('do-login')->middleware('guest');
});

Route::get('home', [LoginController::class,'showDashboard'])->name('show-home')->middleware(['auth','prevent-back']);
Route::post('logout', [LoginController::class,'logout'])->name('do-logout');