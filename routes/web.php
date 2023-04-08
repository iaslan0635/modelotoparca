<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Elastic\ScoutDriverPlus\Support\Query;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('cart', function (){
   /* \App\Packages\Cart::addItem('Test', 5);

    \App\Packages\Cart::addTax(18);*/

    return \App\Packages\Cart::getItems();
});

Route::get('test', function (){
    $query = Query::multiMatch()
        ->fields([
            "title",
            "sub_title",
            "cross_code",
            "producercode",
            "producercode2",
            "similar_product_codes",
        ])
        ->query("porya")
        ->fuzziness('AUTO');

    $results = Product::searchQuery($query)->load(['category'])->execute();

    //$product = Product::whereIn('id', $ids)->;

    return $results->models();
});

Route::view('search', 'search')->name('search');

Route::view('product-list', 'product-list')->name('product-list');
Route::view('models-list', 'models-list')->name('models-list');
Route::view('brands', 'brands')->name('brands-list');

Route::get('categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('c/{category:slug}', [CategoryController::class, 'show'])->name('category.show');
Route::prefix('p/{product:slug}')->group(function () {
    Route::get('quickview', [ProductController::class, 'quickview'])->name('quickview');
    Route::get('/', [ProductController::class, 'show'])->name('product.show');
});
