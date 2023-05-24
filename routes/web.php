<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OemController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $categories = Category::root()->limit(15)->orderBy("order")->get(["slug", "name"]);
    $featured_products = Product::query()->limit(20)->with("price:id,price,currency,product_id")->get(["id", "slug", "sku", "title"]);
    return view('home', compact('categories', 'featured_products'));
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

Route::get('araba/{permalink}', [CarController::class, 'show'])->name('car.search')->where('permalink', '.*');
Route::get('oem/{oem}', [OemController::class, 'show'])->name('oem.search')->where('oem', '.*');

Route::get('categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('c/{category:slug}', [CategoryController::class, 'show'])->name('category.show');
Route::prefix('p/{product:slug}')->group(function () {
    Route::get('quickview', [ProductController::class, 'quickview'])->name('quickview');
    Route::get('/', [ProductController::class, 'show'])->name('product.show');
});

Route::view('cart', 'cart')->name('cart');
Route::view('checkout', 'checkout')->name('checkout');
Route::view('order-success', 'account.order-success')->name('order-success');

//account
Route::view('add-adress', 'account.add-adress')->name('add-adress');

Route::get("/login", function () {
    return view('auth.login');
});
Route::get("/dashboard", function () {
    return view('account.dashboard');
});
Route::get("/edit-profile", function () {
    return view('account.edit-profile');
});
Route::get("/garage", function () {
    return view('account.garage');
});
Route::get("/adress", function () {
    return view('account.adress');
});
Route::get("/order-history", function () {
    return view('account.order-history');
});
Route::get("/order-details", function () {
    return view('account.order-details');
});

Route::get("/connections", function () {
    $models = \App\Models\SparetoConnection::paginate();
    $cols = array_keys(\App\Models\SparetoConnection::first()->attributesToArray());
    return view("admin.temp.table", compact("models", "cols"));
});
