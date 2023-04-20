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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    //
    Route::get('/monitoring', [App\Http\Controllers\MonitoringController::class, 'index'])->name('monitoring');
});

// route for promo
Route::middleware(['auth'])->group(function () {
    Route::get('/promo', [App\Http\Controllers\PromoController::class, 'index'])->name('promo');
});

// route for sales
Route::middleware(['auth'])->group(function () {
    Route::get('/sales', [App\Http\Controllers\SalesController::class, 'index'])->name('sales');
});

// route for sales
Route::middleware(['auth'])->group(function () {
    Route::get('/voucher', [App\Http\Controllers\VoucherController::class, 'index'])->name('voucher');
});