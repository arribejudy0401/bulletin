<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/user/login', [UserController::class, 'index'])->name('user.index');
Route::post('/user', [UserController::class, 'login'])->name('user.login');
Route::get('/user/logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/user/create', [UserController::class, 'registrationForm'])->name('user.create');
Route::post('/user/register', [UserController::class, 'register'])->name('user.register');
Route::get('/user/profile', [UserController::class, 'view'])->name('user.view');
Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
Route::patch('/user/update', [UserController::class, 'update'])->name('user.update');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/show/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::patch('/blog/edit/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');