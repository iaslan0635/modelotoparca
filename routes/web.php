<?php

use App\Facades\Garage;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\User\AddressController;
use App\Http\Controllers\User\ProfileController;
use App\Livewire\CategoryPage;
use App\Livewire\FullPageCarSelector;
use App\Models\ProductMerchant;
use App\Services\MarketPlace;
use Illuminate\Support\Facades\Route;

Route::get('test', function (){
    return (new \App\Services\Merchants\Hepsiburada())->getCategories();
    //return (new \App\Services\Merchants\N11())->getOrders();
    (new \App\Services\Merchants\N11())->syncOrders();
    (new \App\Services\Merchants\TrendyolMerchant())->syncOrders();
    return 'OK';
//    $product = \App\Models\TigerProduct::find(73874);
//    $bot = new \App\Jobs\BotJob($product);
//    $bot->runBotForProduct($product);

});

Route::get('trendyol-query', function (){
    $products = \App\Models\Product::where('ecommerce', true)->get();
    $products->each(function (\App\Models\Product $product) {
        $p_exists = ProductMerchant::where('merchant', '=', 'trendyol')
            ->where('product_id', '=', 'MDL-' . $product->producer_code)
            ->exists();
        if ($p_exists) {
            $exists = (new \App\Services\Merchants\TrendyolMerchant())->getProduct($product);
            if (!$exists){
                ProductMerchant::create([
                    'merchant' => 'trendyol',
                    'merchant_id' => $exists->id,
                    'product_id' => $product->id,
                ]);
            }
            return 'Eşleşme tamamlandı.';
        }
    });
});

//Route::get('trendyol-query', function () {
//    $products = \App\Models\Product::where('ecommerce', true)->get();
//    $merchant = new \App\Services\Merchants\TrendyolMerchant();
//
//    $products->each(function (\App\Models\Product $product) use ($merchant) {
//        // Zaten eşleşmiş mi kontrol et
//        $alreadySynced = \App\Models\ProductMerchant::where('merchant', 'trendyol')
//            ->where('product_id', $product->id)
//            ->exists();
//
//        if (! $alreadySynced) {
//            // Barcode prefix ile sorgulama yapılacak
//            $product->producercode = 'MDL-' . $product->producercode;
//
//            $trendyolProduct = $merchant->getProduct($product);
//
//            if ($trendyolProduct && isset($trendyolProduct->id)) {
//                \App\Models\ProductMerchant::create([
//                    'merchant' => 'trendyol',
//                    'merchant_id' => $trendyolProduct->id,
//                    'product_id' => $product->id,
//                ]);
//            }
//        }
//    });
//
//    return 'Eşleşme tamamlandı.';
//});

Route::get('/', HomeController::class)->name('home');

Route::view('search', 'search')->name('search');
Route::prefix('p/{product:slug}')->group(function () {
    Route::get('quickview', [ProductController::class, 'quickview'])->name('quickview');
    Route::get('/', [ProductController::class, 'show'])->name('product.show');
});

Route::get('categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('c/{category:slug}', CategoryPage::class)->name('category.show');

Route::get('brands', [BrandController::class, 'index'])->name('brands-list');
Route::get('b/{brand:slug}', [BrandController::class, 'show'])->name('brand.show');

Route::view('models-list', 'models-list')->name('models-list');
Route::get('cars/{permalink}', [CarController::class, 'show'])->name('car.search')->where('permalink', '.*');
Route::get('cars', FullPageCarSelector::class)->name('car.select');
Route::get('oem/{oem}', [OemController::class, 'show'])->name('oem.search')->where('oem', '.*');

Route::view('hesaplama-araci', 'hesaplama-araci')->name('hesaplama-araci');

Route::view('cart', 'cart')->name('cart');
Route::view('checkout', 'checkout')->name('checkout');
Route::post('order-complete', [OrderController::class, 'complete'])->name('order-complete')->middleware('auth');
Route::get('order-success', [OrderController::class, 'success'])->name('order-success');
Route::post('order/cancel', [OrderController::class, 'cancel'])->name('order.cancel');

Route::view('/login', 'auth.login')->name('login-view')->middleware('guest');
Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'account.dashboard')->name('dashboard');
    Route::view('/edit-profile', 'account.edit-profile')->name('edit-profile');
    Route::view('/garage', 'account.garage')->name('garage');
    Route::view('/adreslerim', 'account.adress')->name('adreslerim');
    Route::view('/takip-listem', 'account.whislist')->name('takip-listem');
    Route::view('adres-ekle', 'account.add-adress')->name('add-adress');

    Route::post('review/{order}', [OrderController::class, 'review'])->name('review');

    Route::put('update-profile', [ProfileController::class, 'update'])->name('update-profile');
    Route::get('/order-history', [OrderController::class, 'history'])->name('order-history');
    Route::get('/order-details/{order}', [OrderController::class, 'detail'])->name('order-details');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('addresses', AddressController::class)->except(['index', 'create', 'show']);
});

Route::post('register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('login', [AuthController::class, 'login'])->name('login')->middleware('guest');

Route::get('/garage/deselect', function () {
    Garage::deselect();
    return redirect('/');
});

Route::get('{page:slug}', [PageController::class, 'show'])->name('page.show')->fallback();
Route::get('/iletisim', function () { return view('pages.contact');
});
