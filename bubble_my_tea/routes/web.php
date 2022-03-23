<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profil', function () {
    return view('profil');
});

Route::get('products', [ProductController::class, 'index']);

Route::get('cart', [ProductController::class, 'cart']);

Route::get('addToCart/{id}', [ProductController::class, 'addToCart']);

// Route::delete('removeFromCart', [ProductController::class, "remove"]);

require __DIR__.'/auth.php';
