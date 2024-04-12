<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    if(Auth::check()){
       return redirect()->route('products.index');
    } else {
        return redirect()->route('login');
    }
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('products', ProductController::class);
});

Route::get('/create', [ProductController::class, 'create'])->name('product.create');

Route::post('/store', [ProductController::class, 'store'])->name('product.store');

Route::get('/show/{id}', [ProductController::class, 'show'])->name('product.show');
