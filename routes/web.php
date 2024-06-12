<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ControlWindowController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');


Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/control/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/control/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/cafes', [MainPageController::class, 'cafes'])->name('cafes');
Route::get('/postres', [MainPageController::class, 'postres'])->name('postres');
Route::get('/main', [MainPageController::class, 'index'])->name('main');
Route::post('/products/{product}/like', [ProductController::class, 'like'])->name('products.like');

Route::resource('products', ProductController::class);

Route::get('/control', [ControlWindowController::class, 'index'])->name('control.index');
