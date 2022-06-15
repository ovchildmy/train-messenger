<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [IndexController::class, 'index']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login_user', [AuthController::class, 'login_user'])->name('login_user');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/registration', [AuthController::class, 'registration'])->name('registration');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
