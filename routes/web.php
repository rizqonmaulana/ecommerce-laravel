<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingPageController::class, 'index']);

// product
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/detail', [ProductController::class, 'detail']);

// Cart
Route::get('/cart', [CartController::class, 'index']);

// Account
Route::get('/account', [AccountController::class, 'index']);
