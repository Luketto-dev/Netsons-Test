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


Route::get('/home', [App\Http\Controllers\ComicController::class, 'index'])->name('comics.home');
Route::get('/comics/{id}', [App\Http\Controllers\ComicController::class, 'show'])->name('comics.show');



Route::post('/Contacts', [App\Http\Controllers\ContactController::class, 'store'])->name('contacts.store');

