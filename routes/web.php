<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::view('product-list', 'product-list')->name('product-list');
Route::view('models-list', 'models-list')->name('models-list');
Route::view('detail', 'product-detail')->name('product-detail');




Route::get('c/{category:slug}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');
Route::prefix('p/{product:slug}')->group(function (){
    Route::get('quickview', [\App\Http\Controllers\ProductController::class, 'quickview'])->name('quickview');
    Route::get('/', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.show');

});
