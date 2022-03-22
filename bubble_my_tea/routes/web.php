<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/login', function () {
    return view('login');
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

Route::resource('user', UserController::class);