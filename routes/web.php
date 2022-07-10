<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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
    return view('customer.welcome');
})->name('home');

Route::get('/products', function () {
    return view('customer.products', ['products' => Product::all()]);
})->name('products');

Route::prefix('admin')->group(function () {
    
    Route::name('login')->group(function () {
        Route::get('/', function () {
            return view('admin.login');
        })->middleware('guest');
        Route::post('/', [LoginController::class, 'authenticate']);
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware('auth')->name('dashboard');

    Route::name('admin.')->group(function () {
        Route::resource('products', ProductController::class);
    });

});

