<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('test', function (){
    $query = \Elastic\ScoutDriverPlus\Support\Query::multiMatch()
        ->fields([
            "title",
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

Route::get('categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
Route::get('c/{category:slug}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');
Route::prefix('p/{product:slug}')->group(function () {
    Route::get('quickview', [\App\Http\Controllers\ProductController::class, 'quickview'])->name('quickview');
    Route::get('/', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.show');

});
