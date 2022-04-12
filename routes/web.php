<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ImportUserController;
use App\Http\Controllers\UserController;
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

// User Gestion
Route::delete('/delete-user/{id}', [UserController::class, 'delete'])->name("user-delete");

Route::post('/create-user', [UserController::class, 'createUser'])->name("user-create");

Route::patch("/update-admin", [UserController::class, 'updateAdmin'])->name("user-update-admin");

Route::patch("/update-eleve", [UserController::class, 'updateEleve'])->name("user-update-eleve");

Route::get('/mail-send-password-user', [UserController::class, 'sendPasswordMail'])->name("send-password-mail");

Route::post("/import-file", [ImportUserController::class, 'import_file'])->name("import-users-file");

// Classe Gestion

Route::post('create-classe', [ClassesController::class, 'create'])->name("classe-create");

Route::delete('/delete-classe/{id}', [ClassesController::class, 'delete'])->name("classe-delete");

Route::patch("/update-classe", [ClassesController::class, 'update'])->name("classe-update");

// Dashboard Admin
Route::get("/dashHome", [DashboardController::class, 'home'])->name("dash-home");

Route::get('/dashUser', [DashboardController::class, 'user_gestion'])->name("dash-user");

Route::get('/dashClasse', [DashboardController::class, 'classes_gestion'])->name("dash-classe");

Route::get('/dashTemplate', [DashboardController::class, 'template']);
