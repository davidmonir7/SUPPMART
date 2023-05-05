<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ProductController;


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


Auth::routes();

Route::get('/index',[HomeController::class, 'index'])->name('index');
Route::get('/product/{id}',[ProductController::class, 'show'])->name('product.show');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// include('admin. php'); /* to include admin route or  badal go to route servce provider mohem  */