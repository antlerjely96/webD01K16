<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return bcrypt('123456');
});

Route::get('/login', [\App\Http\Controllers\AdminController::class, 'login'])
    ->name('admins.login');
Route::post('/login', [\App\Http\Controllers\AdminController::class, 'loginProcess'])
    ->name('admins.loginProcess');

Route::middleware('authAdmin')->prefix('/admins')
    ->group(function(){
        Route::controller(\App\Http\Controllers\BrandController::class)
            ->name('brands.')
            ->prefix('/brands')
            ->group(function(){
                //Route hiển thị danh sách
                Route::get('/', 'index')
                    ->name('index');
                //Route hiển thị form thêm
                Route::get('/create', 'create')
                    ->name('create');
                //Route thêm dữ liệu
                Route::post('/create', 'store')
                    ->name('store');
                //Route hiển thị form sửa
                Route::get('/{brand}/edit', 'edit')
                    ->name('edit');
                //Route update dữ liệu
                Route::put('/{brand}/edit', 'update')
                    ->name('update');
                //Route delete dữ liệu
                Route::delete('/{brand}', 'destroy')
                    ->name('destroy');
            });

        Route::controller(\App\Http\Controllers\ShoeController::class)
            ->name('shoes.')
            ->prefix('/shoes')
            ->group(function(){
                //Route hiển thị shoes
                Route::get('/', 'index')
                    ->name('index');
                //Route hiển thị form thêm
                Route::get('/create', 'create')
                    ->name('create');
                //Route thêm dữ liệu
                Route::post('/create', 'store')
                    ->name('store');
                //Route hiển thị form sửa
                Route::get('/{shoe}/edit', 'edit')
                    ->name('edit');
                //Route update dữ liệu
                Route::put('/{shoe}/edit', 'update')
                    ->name('update');
                //Route delete dữ liệu
                Route::delete('/{shoe}',  'destroy')
                    ->name('destroy');
            });
        Route::controller(\App\Http\Controllers\CartController::class)
            ->name('carts.')
            ->prefix('/carts')
            ->group(function(){
                Route::get('/', 'index')
                    ->name('index');
                Route::get('/addToCart/{shoe}', 'addtoCart')
                    ->name('addToCart');
                Route::post('/updateCart', 'updateCart')
                    ->name('updateCart');
                Route::get('/removeOneProduct/{shoe}','removeOneProduct')
                    ->name('removeOneProduct');
                Route::get('/deleteCart', 'deleteCart')
                    ->name('deleteCart');
                Route::get('/plus/{shoe}', 'plus')
                    ->name('plus');
                Route::get('/minus/{shoe}', 'minus')
                    ->name('minus');
            });
    });
