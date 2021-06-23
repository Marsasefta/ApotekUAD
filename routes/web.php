<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

// Bisa diakses admin
Route::middleware('admin')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/dashboard', [DashboardController::class, 'store'])->name('add-obat');
        Route::put('/dashboard/{id}/edit', [DashboardController::class, 'update'])->name('edit-obat');
        Route::delete('/dashboard/{id}', [DashboardController::class, 'destroy'])->name('delete-obat');
    });

// Bisa diakses user
Route::get('/beli/{id}', [HomeController::class, 'detail'])->name('detail_obat');
Route::get('/', [HomeController::class, 'index'])->name('home');
