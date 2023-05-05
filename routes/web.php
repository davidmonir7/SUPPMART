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

Route::get('/', function () {
    // return view('dashboard.settings.index');
})->name('index');

Auth::routes();

// Route::get(uri:'/', [\App\Http\Controllers\site\HomeController::class,'index'])->name(name'index');


// include('admin. php'); /* to include admin route or  badal go to route servce provider mohem  */