<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/login', [App\Http\Controllers\main_controller::class, 'showlogin'])->name('all.login');
Route::get('/showchart', [App\Http\Controllers\main_controller::class, 'showchart'])->name('all.showchart');
Route::get('/displayscheme', [App\Http\Controllers\main_controller::class, 'displayscheme'])->name('all.scheme');
Route::get('/signup', [App\Http\Controllers\main_controller::class, 'showsignup'])->name('all.signup');
Route::post('/create', [App\Http\Controllers\main_controller::class, 'store'])->name('all.store');
Route::post('/logincheck', [App\Http\Controllers\main_controller::class, 'logincheck'])->name('all.logincheck');
Route::get('/homepage', [App\Http\Controllers\main_controller::class, 'homepage'])->name('all.homepage')->middleware('userLoggedIn');
Route::get('/weather', [App\Http\Controllers\main_controller::class, 'select_city'])->name('all.weather');
Route::get('/data', [App\Http\Controllers\main_controller::class, 'display_crop'])->name('all.data');
Route::post('/weatherfetch', [App\Http\Controllers\weatherapi::class, 'getCurrentWeather'])->name('all.fetch');
