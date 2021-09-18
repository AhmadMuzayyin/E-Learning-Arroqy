<?php

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

Route::redirect('/', '/login');

Route::get('/login', [App\Http\Controllers\Auth\DirectLoginController::class, 'index'])->name('login');

// Auth::routes();

Route::get('/dashboard/pendidik', [App\Http\Controllers\DashboardPendidik\Home\HomeController::class, 'index'])->name('home.pendidik');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
