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

Route::get('/', function () {
    return view('index', [
        'title' => "Home"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('dashboard/stocks/{id}/endAddStock', [DashboardStockController::class, 'endAddStock'])->middleware('auth');

Route::resource('dashboard/stocks', DashboardStockController::class)->middleware('auth');

Route::get('/dashboard/stockmasuk', [StockMasukController::class, 'index'])->middleware('auth');

Route::get('/dashboard/stockmasuk/{id}/acceptStocks', [StockMasukController::class, 'acceptStocks'])->middleware('auth');

Route::get('/dashboard/stockmasuk/{id}/declineStocks', [StockMasukController::class, 'declineStocks'])->middleware('auth');

Route::get('/help', function () {
    return view('help', [
        'title' => "Help",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => "About"
    ]);
});
