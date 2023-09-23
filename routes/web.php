<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiKampusController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, "index"])->name('landing.home');
Route::get('/profile', [ProfileController::class, "index"])->name('landing.profile');
Route::get('/informasi-kampus', [InformasiKampusController::class, "index"])->name('landing.info-kampus');
