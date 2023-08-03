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
Route::get('/user/logout', [UserController::class, 'logout'])->name('user.logout')->middleware('isLoggedIn');
Route::get('/user/create', [UserController::class, 'registrationForm'])->name('user.create');
Route::post('/user/register', [UserController::class, 'register'])->name('user.register');
Route::get('/user/profile', [UserController::class, 'view'])->name('user.view')->middleware('isLoggedIn');
Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit')->middleware('isLoggedIn');
Route::patch('/user/update', [UserController::class, 'update'])->name('user.update')->middleware('isLoggedIn');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index')->middleware('isLoggedIn');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('isLoggedIn');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('isLoggedIn');
Route::get('/blog/show/{blog}', [BlogController::class, 'show'])->name('blog.show')->middleware('can:show,blog');
Route::get('/blog/edit/{blog}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('can:edit,blog');
Route::patch('/blog/edit/{blog}', [BlogController::class, 'update'])->name('blog.update')->middleware('can:update,blog');
Route::delete('/blog/delete/{blog}', [BlogController::class, 'destroy'])->name('blog.delete')->middleware('can:delete,blog');