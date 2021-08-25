<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sale;
use App\Http\Controllers\ProductController;

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

Route::get('/', [Productcontroller::class, 'index']);
Route::get('/products', [Productcontroller::class, 'products']);
Route::get('/product', [Productcontroller::class, 'productDetails']);
Route::get('/cart', [Sale::class, 'viewCart']);
Route::get('/checkout', [Sale::class, 'viewCheckout']);
Route::get('/thankyou', [Sale::class, 'thankYou']);

