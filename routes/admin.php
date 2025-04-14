<?php

use App\Http\Controllers\Admin\AnalysisController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ImportController;
use App\Http\Controllers\Admin\MerchantProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MerchantOrderController;
use App\Http\Controllers\MerchantSettingController;
use App\Http\Controllers\MerchantTrackingController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', DashboardController::class)->name('dashboard');

Route::view('/h', 'admin.horizental.layout');

Route::prefix('products/{product}/edit')->name('products.edit.')->controller(ProductController::class)->group(function () {
    Route::get('oem', 'push_oem')->name('oem');
    Route::post('image', 'push_image')->name('image');
    Route::get('searchForSelect2', 'searchForSelect2')->name('searchForSelect2');
    Route::get('rerunBot', 'rerunBot')->name('rerunBot');
});

Route::get('products/export', [ProductController::class, 'exportToExcel'])->name('products.export');

Route::get('products', [ProductController::class, 'index'])->name('products.index')->middleware('permission:Stok Yönetimi.Ürünler.Listele');
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show')->middleware('permission:Stok Yönetimi.Ürünler.Listele');

Route::prefix('categories/{category}/edit')->name('categories.edit.')->controller(CategoryController::class)->group(function () {
    Route::post('image', 'push_image')->name('image');
    Route::post('delete_image', 'delete_image')->name('delete_image');
});

Route::get('categories', [CategoryController::class, 'index'])->name('categories.index')->middleware('permission:Stok Yönetimi.Kategoriler.Listele');
Route::get('categories/reorder', App\Livewire\Admin\Category\Reorder::class)->name('categories.reorder')->middleware('permission:Stok Yönetimi.Kategoriler.Listele');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show')->middleware('permission:Stok Yönetimi.Kategoriler.Listele');
Route::post('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

Route::post('delete_image', [ImageController::class, 'delete'])->name('delete-image');

Route::controller(ImportController::class)->prefix('import')->name('import.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::post('ITEMS_WEB', 'ITEMS_WEB')->name('ITEMS_WEB')->middleware('permission:Aktarma İşlemleri.İçe Aktar.ITEMS WEB');
    Route::post('ITEMS_WEB_EK', 'ITEMS_WEB_EK')->name('ITEMS_WEB_EK')->middleware('permission:Aktarma İşlemleri.İçe Aktar.ITEMS WEB EK');
    Route::post('ITEMSUBS', 'ITEMSUBS')->name('ITEMSUBS')->middleware('permission:Aktarma İşlemleri.İçe Aktar.ITEMS SUBS');
    Route::post('KATEGORILER', 'KATEGORILER')->name('KATEGORILER')->middleware('permission:Aktarma İşlemleri.İçe Aktar.ITEMCLSAS');
    Route::post('FILTER_OIL', 'FILTER_OIL')->name('FILTER_OIL')->middleware('permission:Aktarma İşlemleri.İçe Aktar.FILTER_OIL');
    Route::post('MARKALAR', 'MARKALAR')->name('MARKALAR')->middleware('permission:Aktarma İşlemleri.İçe Aktar.MARKALAR');
    Route::get('sparetobot_bot', 'sparetobot_bot')->name('sparetobot_bot');
    Route::get('sparetobot_connect', 'sparetobot_connect')->name('sparetobot_connect');
    Route::get('rerunMissingProducts', 'rerunMissingProducts')->name('rerunMissingProducts');

    Route::get('/log', function () {
        $fails = DB::table("failed_jobs")->orderByDesc('failed_at')->paginate(10);
        return view('admin.import.log', compact('fails'));
    })->name('log');
    Route::get('/botlog', function () {
        $logs = \App\Models\Log::orderByDesc('id')->paginate(50);
        return view('admin.import.botlog', compact('logs'));
    })->name('botlog');

});

Route::controller(AnalysisController::class)->prefix('analysis')->name('analysis.')->group(function () {
    Route::get('search', 'index')->name('search')->middleware('permission:Analizler.Arama İstatistikleri');
    Route::get('search-replacements', 'searchReplacements')->name('search-replacements')->middleware('permission:Analizler.Arama Düzeltmleri.Listele');
});

Route::controller(CarController::class)->prefix('cars')->name('cars.')->group(function () {
    Route::get('', 'index')->name('index')->middleware('permission:Analizler.Araçlar.Listele');
    Route::post('toggleIndexing', 'toggleIndexing')->name('toggleIndexing')->middleware('permission:Analizler.Araçlar.Düzenle');
});

Route::get('brands', [BrandController::class, 'index'])->name('brands.index')->middleware('permission:Stok Yönetimi.Markalar.Ara');
Route::get('brands/{brand}/edit', [BrandController::class, 'edit'])->name('brands.edit')->middleware(permissionMiddleware('Stok Yönetimi.Markalar.Düzenle.*'));
Route::put('brands/{brand}', [BrandController::class, 'update'])->name('brands.update')->middleware(permissionMiddleware('Stok Yönetimi.Markalar.Düzenle.*'));

Route::resource('pages', PageController::class)->except(['show']);
Route::resource('discounts', DiscountController::class)->except(['show']);

Route::get('/sales-list', [OrderController::class, 'list'])->name('order.list')->middleware('permission:Eticaret Yönetimi.Siparişler.Tüm Siparişler');
Route::get('/order/{order}', [OrderController::class, 'show'])->name('order.show')->middleware('permission:Eticaret Yönetimi.Siparişler.Sipariş Sorgula');
Route::get('/order-edit/{order}', [OrderController::class, 'edit'])->name('order.edit')->middleware('permission:Eticaret Yönetimi.Siparişler.Sipariş Sorgula');
Route::put('/order-update/{order}', [OrderController::class, 'update'])->name('order.update')->middleware('permission:Eticaret Yönetimi.Siparişler.Sipariş Sorgula');
Route::get('/order/{order}/decline/{lineId}/{reasonType}', [OrderController::class, 'declineOrder'])->name('order.declineOrder')->middleware('permission:Eticaret Yönetimi.Siparişler.İptal Edilenler');

Route::get('/marketplace-products', [MerchantProductController::class, 'index'])->name('marketplace-products.index')->middleware('permission:Pazaryerleri.Ürünler.Tüm Ürünler');
Route::get('/marketplace-products/on-sale', [MerchantProductController::class, 'onSaleIndex'])->name('marketplace-products.on-sale')->middleware('permission:Pazaryerleri.Ürünler.Satıştaki Ürünler');

Route::get('/marketplace-orders', [MerchantOrderController::class, 'index'])->name('order.marketplace')->middleware('permission:Pazaryerleri.Siparişler.Tüm Siparişler');
Route::get('/marketplace-order/{order}', [MerchantOrderController::class, 'show'])->name('order.marketplace.show')->middleware('permission:Pazaryerleri.Siparişler.Tüm Siparişler');
Route::get('/marketplace-order/{order}/decline/{lineId}/{reasonType}', [MerchantOrderController::class, 'declineOrder'])->name('order.marketplace.declineOrder')->middleware('permission:Pazaryerleri.Siparişler.Tüm Siparişler');

Route::get('category-sync', [CategoryController::class, 'categorySync'])->name('category-sync')->middleware('permission:Pazaryerleri.Kategori Eşitleme');
Route::get('brand-sync', [BrandController::class, 'brandSync'])->name('brand-sync')->middleware('permission:Pazaryerleri.Marka Eşitleme');
Route::put('brand-sync', [BrandController::class, 'updateBrandConnection'])->name('brand-sync.update')->middleware('permission:Pazaryerleri.Marka Eşitleme');
Route::get('brand-sync/search', [BrandController::class, 'searchTrendyolBrands'])->name('brand-sync.search');

Route::controller(RoleController::class)->name("role.")->prefix("role")->group(function () {
    Route::get('{role}/delete', 'delete')->name('delete')->middleware('permission:Kullanıcı İşlemleri.Roller.Sil');
    Route::get('', 'index')->name('index')->middleware('permission:Kullanıcı İşlemleri.Roller.Listele');
    Route::get('create', 'create')->name('create')->middleware('permission:Kullanıcı İşlemleri.Roller.İzinleri Düzenle');
    Route::post('', 'store')->name('store')->middleware('permission:Kullanıcı İşlemleri.Roller.İzinleri Düzenle');
    Route::get('{role}', 'show')->name('show')->middleware('permission:Kullanıcı İşlemleri.Roller.Listele');
    Route::get('{role}/edit', 'edit')->name('edit')->middleware('permission:Kullanıcı İşlemleri.Roller.İzinleri Düzenle');
    Route::put('{role}', 'update')->name('update')->middleware('permission:Kullanıcı İşlemleri.Roller.İzinleri Düzenle');
    Route::get('unassign/{role}/{user}', 'unassign')->name('unassign')->middleware('permission:Kullanıcı İşlemleri.Roller.İzinleri Düzenle');
});

Route::get('merchant/failed', [MerchantTrackingController::class, 'failed'])->name('merchant.failed')->middleware('permission:Pazaryerleri.Ürünler.Hatalı Ürünler');
Route::get('merchant-setting', [MerchantSettingController::class, 'index'])->name('merchant-setting.index')->middleware('permission:Pazaryerleri.Entegrasyon Ayarları');
Route::post('merchant-setting', [MerchantSettingController::class, 'store'])->name('merchant-setting.store')->middleware('permission:Pazaryerleri.Entegrasyon Ayarları');

if (app()->hasDebugModeEnabled()) {
    Route::fallback(function () {
        $segments = request()->segments();
        $view = str_replace('.html', '', implode('.', $segments));
        abort_unless(View::exists($view), 404, 'View not exists');

        return view($view);
    });
}

Route::controller(AuthController::class)->name('auth.')->group(function () {
    Route::get('login', 'login')->name('login')->withoutMiddleware(['auth:admin']);
    Route::post('login', 'authenticate')->name('authenticate')->withoutMiddleware(['auth:admin']);
    Route::get('logout', 'logout')->name('logout');
});

Route::controller(UserController::class)->name("user.")->prefix("user")->group(function () {
    Route::get('', 'index')->name('index')->middleware('permission:Kullanıcı İşlemleri.Yöneticiler.Listele');
    Route::get('create', 'create')->name('create')->middleware('permission:Kullanıcı İşlemleri.Yöneticiler.Ekle');
    Route::post('', 'store')->name('store')->middleware('permission:Kullanıcı İşlemleri.Yöneticiler.Ekle');
    Route::get('{user}', 'show')->name('show')->middleware('permission:Kullanıcı İşlemleri.Yöneticiler.Listele');
    Route::get('{user}/edit', 'edit')->name('edit')->middleware(permissionMiddleware('Kullanıcı İşlemleri.Yöneticiler.Düzenle.*'));
    Route::put('{user}', 'update')->name('update')->middleware(permissionMiddleware('Kullanıcı İşlemleri.Yöneticiler.Düzenle.*'));
    Route::delete('{user}', 'destroy')->name('destroy')->middleware(permissionMiddleware('Kullanıcı İşlemleri.Yöneticiler.Düzenle.*'));
});

Route::controller(EmployeeController::class)->name("employee.")->prefix("employee")->group(function () {
    Route::get('', 'index')->name('index')->middleware('permission:Kullanıcı İşlemleri.Kullanıcılar.Listele');
    Route::get('create', 'create')->name('create')->middleware('permission:Kullanıcı İşlemleri.Kullanıcılar.Ekle');
    Route::post('', 'store')->name('store')->middleware('permission:Kullanıcı İşlemleri.Kullanıcılar.Ekle');
    Route::get('{employee}', 'show')->name('show')->middleware('permission:Kullanıcı İşlemleri.Kullanıcılar.Listele');
    Route::get('{employee}/edit', 'edit')->name('edit')->middleware(permissionMiddleware('Kullanıcı İşlemleri.Kullanıcılar.Düzenle.*'));
    Route::put('{employee}', 'update')->name('update')->middleware(permissionMiddleware('Kullanıcı İşlemleri.Kullanıcılar.Düzenle.*'));
    Route::delete('{employee}', 'destroy')->name('destroy')->middleware(permissionMiddleware('Kullanıcı İşlemleri.Kullanıcılar.Düzenle.*'));
});





//Route::prefix('panel')->group(function () {
//    Route::get('/dashboard3', function () {
//        return view('panel.dashboard.index');
//    })->name('dashboard3');
//
//    // Diğer sayfalar için route tanımlamaları
//});

Route::prefix('panel')->group(function () {
    Route::get('/', [\App\Http\Controllers\Panel\DashboardController::class, 'index'])->name('panel.dashboard');
    Route::get('products/{product}', [ProductController::class, 'show'])->name('panel.product.show');
});


//Route::middleware(['auth'])->prefix('panel')->group(function () {
//    Route::get('/', [\App\Http\Controllers\Panel\DashboardController::class, 'index'])->name('panel.dashboard');
//});
