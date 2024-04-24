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

//一覧画面
Route::get('/index',[ProductController::class, 'index'])->name('product.index');

//詳細画面
Route::get('/show/{id}', [ProductController::class, 'show'])->name('product.show');

//編集画面
Route::get('/edit/{id}',[ProductController::class, 'edit'])->name('product.edit');

//新規登録画面
Route::get('/create', [ProductController::class, 'create'])->name('product.create');

//作成処理
Route::post('/store', [ProductController::class, 'store'])->name('product.store');

//編集処理
Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');

//削除処理
Route::post('/destroy/{id}', [ProductController::class, 'destroy'])->name('product.update');

