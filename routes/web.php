<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/template', function () {
    return view('template');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', [UserController::class, 'index'])->middleware('role:admin');

Route::resource('posts', PostController::class)->middleware('auth');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::resource('posts', PostController::class);