<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\KopiController;
use App\Http\Controllers\ProductsController;


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

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/about', 'about');
});

 Route::get('/kopi', [KopiController::class, 'index']);
// Route::get('/about', [PagesController::class, 'about']);

// Products
// Route::controller(ProductsController::class)->group(function () {
//     Route::get('/products', 'index');
//     Route::get('products/create', 'create');
//     Route::get('/products/{product}', 'show');
//     Route::post('/products', 'store'); // insert data kedalam database menggunakan post
//     Route::delete('/products/{product}', 'destroy'); 
//     Route::get('/products/{product}/edit', 'edit'); 
//     Route::patch('/products/{product}', 'update'); 
// });

// Menggunakan Route Simple
Route::resource('products', ProductsController::class);


