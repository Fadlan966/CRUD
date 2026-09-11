<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('products.index');
});

Route::resource('products', ProductController::class);// Source - https://stackoverflow.com/a/76978560
// Posted by MorganFreeFarm
// Retrieved 2026-09-11, License - CC BY-SA 4.0

Route::get('/', [App\Http\Controllers\ProductController::class, 'index']);
