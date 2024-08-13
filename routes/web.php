<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FerrasController;


Route::view('/login', 'login')->name('login');
Route::view('/', 'dashboard')->name('dashboard')->middleware('auth');
Route::post('/login', [FerrasController::class, 'login'])->name('loginapp');
Route::get('/logout', [FerrasController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('/register', [FerrasController::class, 'register'])->name('register');
Route::get('/productos', [FerrasController::class, 'vproducts'])->name('view_products')->middleware('auth');
Route::get('/inventario', [FerrasController::class, 'iproducts'])->name('view_inventory')->middleware('auth');
// Route::get('/login', [FerrasController::class, 'login'])->name('login');
