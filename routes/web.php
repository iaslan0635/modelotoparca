<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\User\AddressController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Livewire\CategoryPage;
use App\Jobs\Import\ExcelImport;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('deneme', function (){
    $product = \App\Models\TigerProduct::find(51267);
    ExcelImport::runBot($product);
});

Route::get('/', function () {
    $categories = Category::root()->limit(15)->orderBy('order')->get(['slug', 'name', 'id']);
    $featured_products = Product::query()->limit(20)->with('price:id,price,currency,product_id')->get(['id', 'slug', 'sku', 'title', 'image_appendix']);

    return view('home', compact('categories', 'featured_products'));
})->name('welcome');

Route::view('search', 'search')->name('search');
Route::view('product-list', 'product-list')->name('product-list');
Route::view('models-list', 'models-list')->name('models-list');
Route::view('brands', 'brands')->name('brands-list');

Route::get('araba/{permalink}', [CarController::class, 'show'])->name('car.search')->where('permalink', '.*');
Route::get('oem/{oem}', [OemController::class, 'show'])->name('oem.search')->where('oem', '.*');

Route::get('categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('c/{category:slug}', CategoryPage::class)->name('category.show');
Route::prefix('p/{product:slug}')->group(function () {
    Route::get('quickview', [ProductController::class, 'quickview'])->name('quickview');
    Route::get('/', [ProductController::class, 'show'])->name('product.show');
});

Route::view('cart', 'cart')->name('cart');
Route::view('checkout', 'checkout')->name('checkout');
Route::post('order-complete', [OrderController::class, 'complete'])->name('order-complete')->middleware('auth');
Route::get('order-success', [OrderController::class, 'success'])->name('order-success');

//account

Route::get('/login', function () {
    return view('auth.login');
})->name('login-view')->middleware('guest');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('account.dashboard');
    })->name('dashboard');
    Route::get('/edit-profile', function () {
        return view('account.edit-profile');
    })->name('edit-profile');
    Route::put('update-profile', [ProfileController::class, 'update'])->name('update-profile');
    Route::get('/garage', function () {
        return view('account.garage');
    })->name('garage');
    Route::get('/adreslerim', function () {
        return view('account.adress');
    })->name('adreslerim');
    Route::get('/takip-listem', function () {
        return view('account.whislist');
    })->name('takip-listem');
    Route::view('adres-ekle', 'account.add-adress')->name('add-adress');
    Route::resource('addresses', AddressController::class)->except(['index', 'create', 'show']);
    Route::get('/order-history', [OrderController::class, 'history'])->name('order-history');
    Route::get('/order-details/{order}', [OrderController::class, 'detail'])->name('order-details');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::post('register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('login', [AuthController::class, 'login'])->name('login')->middleware('guest');

Route::get('/connections', function () {
    $models = \App\Models\SparetoConnection::paginate();
    $cols = array_keys(\App\Models\SparetoConnection::first()->attributesToArray());

    return view('admin.temp.table', compact('models', 'cols'));
});

Route::get('/garage/deselect', function () {
    \App\Facades\Garage::deselect();
    return redirect("/");
});
