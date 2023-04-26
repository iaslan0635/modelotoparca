<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductOem;
use Elastic\ScoutDriverPlus\Support\Query;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $categories = Category::root()->limit(15)->orderBy("order")->get(["slug", "name"]);
    $featured_products = Product::query()->limit(20)->with("price:id,price,currency,product_id")->get(["id", "slug" ,"sku", "title"]);
    return view('home', compact('categories' ,'featured_products'));
});

Route::get('cart', function () {
    /*$product = Product::find(2508);
    \App\Packages\Cart::addItem('Test', 5, quantity: 1,attributes: [
        ['name' => 'color', 'value' => 'white'],
        ['name' => 'weight', 'value' => 2.37],
    ], model: $product);*/

    /*\App\Packages\Cart::addTax(18);*/
    \App\Packages\Cart::removeItem("6431751b515c1");
    \App\Packages\Cart::addShippingCost(20);

    return \App\Packages\Cart::getItems();
});

Route::get('test', function () {
    dump(\App\Packages\Search::query(request()->get("query")));
});

Route::view('search', 'search')->name('search');

Route::view('product-list', 'product-list')->name('product-list');
Route::view('models-list', 'models-list')->name('models-list');
Route::view('brands', 'brands')->name('brands-list');
Route::view('cart', 'cart')->name('cart');
Route::view('checkout', 'checkout')->name('checkout');
Route::view('add-adress', 'account.add-adress')->name('add-adress');
Route::view('order-success', 'account.order-success')->name('order-success');

Route::get('araba/{permalink}', [CarController::class, 'index'])->name('car.search')->where('permalink', '.*');

Route::get('categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('c/{category:slug}', [CategoryController::class, 'show'])->name('category.show');
Route::prefix('p/{product:slug}')->group(function () {
    Route::get('quickview', [ProductController::class, 'quickview'])->name('quickview');
    Route::get('/', [ProductController::class, 'show'])->name('product.show');
});
