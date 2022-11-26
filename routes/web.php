<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();
Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('auth.login');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('comics.home');

Route::get('/messages/create', [App\Http\Controllers\MessageController::class, 'create'])->name('messages.create');
