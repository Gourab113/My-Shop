<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/register',[AuthController::class, 'showRegister'])->name('show.register');
Route::get('/login',[AuthController::class, 'showLogin'])->name('show.login');

Route::post('/register',[AuthController::class, 'register'])->name('register');
Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::post('/logout',[AuthController::class, 'logout'])->name('logout');


Route::get('/products',[ProductController::class, 'viewProducts'])->name('show.products');
Route::get('/add-product',[ProductController::class, 'addProduct'])->name('add-product');
Route::post('/store-product',[ProductController::class, 'storeProduct'])->name('products.store');


Route::get('/products/{id}', [ProductController::class, 'viewSingleProduct'])
    ->name('products.show');