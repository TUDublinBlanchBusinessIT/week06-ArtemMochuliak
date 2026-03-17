<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\scorderController;
use App\Http\Controllers\orderdetailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Resource routes
Route::resource('products', productController::class);
Route::resource('scorders', scorderController::class);
Route::resource('orderdetails', orderdetailController::class);

// Custom routes for the shop window
Route::get('product/additem/{id}', [productController::class, 'additem'])->name('products.additem');
Route::get('product/displaygrid', [productController::class, 'displayGrid'])->name('products.displaygrid');
Route::get('product/emptycart', 'App\Http\Controllers\productController@emptycart')->name('product.emptycart');