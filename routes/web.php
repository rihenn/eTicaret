<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageHomeController;
use App\Http\Controllers\Frontend\PageController;


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

Route::get('/', [PageHomeController::class,"index"])->name("index");

Route::get('/products', [pageController::class,"products"])->name("products");

Route::get('/about', [pageController::class,"about"])->name("about");

Route::get('/product-detail', [pageController::class,"productDetail"])->name("productDetail");

Route::get('/communication', [pageController::class,"communication"])->name("communication");

Route::get('/cart', [pageController::class,"cart"])->name("cart");
