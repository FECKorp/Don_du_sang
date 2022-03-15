<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'home'])->name("home");

Route::get('/login', [FrontController::class, 'login'])->name("login");

// Dashboard Admin
Route::get("/dashHome", [DashboardController::class, 'home'])->name("dash-home");

Route::get('/dashTemplate', [DashboardController::class, 'template']);
