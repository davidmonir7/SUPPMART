<?php

use Illuminate\Support\Facades\Route;

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

<<<<<<< HEAD

Auth::routes();

Route::get('/index',[HomeController::class, 'index'])->name('index');
Route::get('/product/{id}',[ProductController::class, 'show'])->name('product.show');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// include('admin. php'); /* to include admin route or  badal go to route servce provider mohem  */
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> a58d3870e5e202a85bd092118e7da2b09098ea4c
