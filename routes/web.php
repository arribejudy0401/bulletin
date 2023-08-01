<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'] )->name('home.index');
Route::any('/user/login', [UserController::class, 'login'])->name('user.login');
Route::any('/user/register', [UserController::class, 'register'])->name('user.register');

Route::get('/user/profile', [UserController::class, 'view'])->name('user.view');
Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');