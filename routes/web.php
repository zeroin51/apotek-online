<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardStockController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardObatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StockMasukController;

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

Route::resource('dashboard/obats', DashboardObatController::class)->middleware('auth');

Route::get('dashboard/users/{id}/makeAdmin', [DashboardUserController::class, 'makeAdmin'])->middleware('auth');

Route::resource('dashboard/users', DashboardUserController::class)->middleware('auth');

Route::get('dashboard/admin/{id}/removeAdmin', [DashboardAdminController::class, 'removeAdmin'])->middleware('auth');

Route::resource('dashboard/admin', DashboardAdminController::class)->middleware('auth');

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
