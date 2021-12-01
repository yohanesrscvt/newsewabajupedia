<?php

use App\Http\Controllers\Agent\AgentHomeController;
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

Route::middleware(['guest'])->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('register',[RegisterController::class,'create'])->name('show-register');
        Route::post('register', [RegisterController::class,'store'])->name('do-register');
        Route::get('login',[LoginController::class,'create'])->name('show-login');
        Route::post('login', [LoginController::class,'store'])->name('do-login');
    });
});

Route::post('logout', [LoginController::class,'logout'])->name('do-logout');

Route::middleware(['auth','prevent-back'])->group(function () {
    Route::get('home', [LoginController::class,'showDashboard'])->name('show-home');
    Route::prefix('agent')->group(function () {
        Route::get('/', [AgentHomeController::class,'index'])->name('agent-home');
        Route::get('add-clothes', [AgentHomeController::class,'create'])->name('show-add-clothes');
        Route::post('add-clothes', [AgentHomeController::class,'store'])->name('do-add-clothes');
    });
});