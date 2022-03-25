<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrdersController;

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
    return view('welcome');
});



Route::get('/sign', function () {
    return view('sign');
});


// Route::get('/user/{id}', [UserController::class, 'show']);

// Route::post('/sign', function () {
//     return view('sign');
// })->name('signIn'); 

// Route::get('user/{id}', function($id) {
//     return $id;
//});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/profil', function () {
//     return view('profil');
// });

Route::get('profil', [UserController::class, 'show'])->middleware('auth');

Route::get('products', [ProductController::class, 'index']);

Route::get('cart', [CartController::class, 'cart']);
Route::get('addToCart/{id}', [CartController::class, 'addToCart']);
Route::get('removeOne/{id}', [CartController::class, 'removeOne']);

Route::get('confirmOrder', [CartController::class, 'confirmOrder'])->middleware('auth');
Route::get('newOrder', [OrdersController::class, 'store'])->middleware('auth');


// Route::delete('removeFromCart', [CartController::class, "remove"]);

// Route::get('order_products/{id}', [CartController::class, 'addToCart']);


require __DIR__.'/auth.php';

