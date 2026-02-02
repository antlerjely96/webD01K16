<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route hiển thị danh sách
Route::get('/brands', [\App\Http\Controllers\BrandController::class, 'index'])
    ->name('brands.index');
//Route hiển thị form thêm
Route::get('/brands/create', [\App\Http\Controllers\BrandController::class, 'create'])
    ->name('brands.create');
//Route thêm dữ liệu
Route::post('/brands/create', [\App\Http\Controllers\BrandController::class, 'store'])
    ->name('brands.store');
//Route hiển thị form sửa
Route::get('/brands/{brand}/edit', [\App\Http\Controllers\BrandController::class, 'edit'])
    ->name('brands.edit');
//Route update dữ liệu
Route::put('/brands/{brand}/edit', [\App\Http\Controllers\BrandController::class, 'update'])
    ->name('brands.update');
//Route delete dữ liệu
Route::delete('/brands/{brand}', [\App\Http\Controllers\BrandController::class, 'destroy'])
    ->name('brands.destroy');
