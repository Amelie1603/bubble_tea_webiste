<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

// Route::get('/login', function () {
//     return view('login');
// });

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

Route::resource('profil', UserController::class)->middleware('auth');

Route::get('products', [ProductController::class, 'index']);

Route::get('cart', [ProductController::class, 'cart']);

Route::get('addToCart/{id}', [ProductController::class, 'addToCart']);

// Route::delete('removeFromCart', [ProductController::class, "remove"]);

Route::get('order_products/{id}', [ProductController::class, 'addToCart']);


require __DIR__.'/auth.php';

