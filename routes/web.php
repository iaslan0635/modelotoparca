<?php

use App\Models\Product;
use Elastic\ScoutDriverPlus\Support\Query;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('search', function () { // http://127.0.0.1:8000/search?q=MAHLEOX422D
    $query = Query::multiMatch()
        ->fields([
            "title",
            "cross_code",
            "producercode",
            "producercode2",
            "similar_product_codes",
            "oem",
            "oem_codes",
        ])
        ->query(request()->get("q"))
        ->fuzziness('AUTO');

    $products = Product::searchQuery($query)->execute()->models();
    return $products;
});

Route::view('product-list', 'product-list')->name('product-list');
Route::view('models-list', 'models-list')->name('models-list');


Route::get('c/{category:slug}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');
Route::prefix('p/{product:slug}')->group(function () {
    Route::get('quickview', [\App\Http\Controllers\ProductController::class, 'quickview'])->name('quickview');
    Route::get('/', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.show');

});
