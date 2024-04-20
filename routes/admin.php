<?php

use App\Http\Controllers\Admin\AnalysisController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ImportController;
use App\Http\Controllers\Admin\MerchantProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MerchantOrderController;
use App\Http\Controllers\MerchantSettingController;
use App\Http\Controllers\MerchantTrackingController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Middleware\PermissionMiddleware;

function permitPattern($permissionPattern)
{
    return PermissionMiddleware::using(permissions($permissionPattern));
}

Route::get('/', DashboardController::class)->name('dashboard');

Route::prefix('products/{product}/edit')->name('products.edit.')->controller(ProductController::class)->group(function () {
    Route::get('oem', 'push_oem')->name('oem');
    Route::post('image', 'push_image')->name('image');
    Route::get('searchForSelect2', 'searchForSelect2')->name('searchForSelect2');
    Route::get('rerunBot', 'rerunBot')->name('rerunBot');
});

Route::get('products/export', [ProductController::class, 'exportToExcel'])->name('products.export');

# region product
Route::get('products', [ProductController::class, 'index'])->name('products.index')->middleware('permission:Stok Yönetimi.Ürünler.Listele');
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show')->middleware('permission:Stok Yönetimi.Ürünler.Listele');
# endregion

Route::prefix('categories/{category}/edit')->name('categories.edit.')->controller(CategoryController::class)->group(function () {
    Route::post('image', 'push_image')->name('image');
    Route::post('delete_image', 'delete_image')->name('delete_image');
});

# region category
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index')->middleware('permission:Stok Yönetimi.Kategoriler.Listele');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show')->middleware('permission:Stok Yönetimi.Kategoriler.Listele');
# endregion

Route::post('delete_image', [ImageController::class, 'delete'])->name('delete-image');

Route::controller(ImportController::class)->prefix('import')->name('import.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::post('ITEMS_WEB', 'ITEMS_WEB')->name('ITEMS_WEB')->middleware("permission:Aktarma İşlemleri.İçe Aktar.ITEMS WEB");
    Route::post('ITEMS_WEB__APPEND', 'ITEMS_WEB__APPEND')->name('ITEMS_WEB__APPEND')->middleware('permission:Aktarma İşlemleri.İçe Aktar.ITEMS WEB EK');
    Route::post('ITEMSUBS', 'ITEMSUBS')->name('ITEMSUBS')->middleware('permission:Aktarma İşlemleri.İçe Aktar.ITEMS SUBS');
    Route::post('ITMCLSAS', 'ITMCLSAS')->name('ITMCLSAS')->middleware('permission:Aktarma İşlemleri.İçe Aktar.ITEMCLSAS');
    Route::post('FILTER_OIL', 'FILTER_OIL')->name('FILTER_OIL')->middleware('permission:Aktarma İşlemleri.İçe Aktar.FILTER_OIL');
    Route::post('MARKALAR', 'MARKALAR')->name('MARKALAR')->middleware('permission:Aktarma İşlemleri.İçe Aktar.MARKALAR');
    Route::get('sparetobot_bot', 'sparetobot_bot')->name('sparetobot_bot');
    Route::get('sparetobot_connect', 'sparetobot_connect')->name('sparetobot_connect');
});

Route::controller(AnalysisController::class)->prefix('analysis')->name('analysis.')->group(function () {
    Route::get('search', 'search')->name('search')->middleware('permission:Analizler.Arama İstatistikleri');
    Route::get('search-replacements', 'searchReplacements')->name('search-replacements')->middleware('permission:Analizler.Arama Düzeltmleri.Listele');
});

Route::controller(CarController::class)->prefix('cars')->name('cars.')->group(function () {
    Route::get('', 'index')->name('index')->middleware('permission:Analizler.Araçlar.Listele');
    Route::post('toggleIndexing', 'toggleIndexing')->name('toggleIndexing')->middleware('permission:Analizler.Araçlar.Düzenle');
});

# region brand
Route::get('brands', [BrandController::class, 'index'])->name('brands.index')->middleware('permission:Stok Yönetimi.Markalar.Ara');
Route::get('brands/{brand}/edit', [BrandController::class, 'edit'])->name('brands.edit')->middleware(permitPattern("Stok Yönetimi.Markalar.Düzenle.*"));
Route::put('brands/{brand}', [BrandController::class, 'update'])->name('brands.update')->middleware(permitPattern("Stok Yönetimi.Markalar.Düzenle.*"));;
# endregion

Route::get('/sales-list', [OrderController::class, 'list'])->name('order.list')->middleware('permission:Eticaret Yönetimi.Siparişler.Tüm Siparişler');
Route::get('/order/{order}', [OrderController::class, 'show'])->name('order.show')->middleware('permission:Eticaret Yönetimi.Siparişler.Sipariş Sorgula');
Route::get('/order-edit/{order}', [OrderController::class, 'edit'])->name('order.edit')->middleware('permission:Eticaret Yönetimi.Siparişler.Sipariş Sorgula');
Route::put('/order-update/{order}', [OrderController::class, 'update'])->name('order.update')->middleware('permission:Eticaret Yönetimi.Siparişler.Sipariş Sorgula');

Route::get('/marketplace-products', [MerchantProductController::class, 'index'])->name('marketplace-products.index')->middleware('permission:Pazaryerleri.Ürünler.Tüm Ürünler');
Route::get('/marketplace-products/on-sale', [MerchantProductController::class, 'onSaleIndex'])->name('marketplace-products.on-sale')->middleware('permission:Pazaryerleri.Ürünler.Satıştaki Ürünler');

Route::get('/marketplace-orders', [MerchantOrderController::class, 'index'])->name('order.marketplace')->middleware('permission:Pazaryerleri.Siparişler.Tüm Siparişler');
Route::get('/marketplace-order/{order}', [MerchantOrderController::class, 'show'])->name('order.marketplace.show')->middleware('permission:Pazaryerleri.Siparişler.Tüm Siparişler');
Route::get('/marketplace-order/{order}/{lineId}/{reasonType}', [MerchantOrderController::class, 'declineOrder'])->name('order.marketplace.declineOrder')->middleware('permission:Pazaryerleri.Siparişler.Tüm Siparişler');

Route::get('category-sync', [CategoryController::class, 'categorySync'])->name('category-sync')->middleware('permission:Pazaryerleri.Kategori Eşitleme');
Route::get('brand-sync', [BrandController::class, 'brandSync'])->name('brand-sync')->middleware('permission:Pazaryerleri.Marka Eşitleme');
Route::put('brand-sync', [BrandController::class, 'updateBrandConnection'])->name('brand-sync.update')->middleware('permission:Pazaryerleri.Marka Eşitleme');
Route::get('brand-sync/search', [BrandController::class, 'searchTrendyolBrands'])->name('brand-sync.search');

Route::get('role/{role}/delete', [RoleController::class, 'delete'])->name('role.delete')->middleware('permission:Kullanıcı İşlemleri.Roller.Sil');

# region role
Route::get('role', [RoleController::class, 'index'])->name('role.index')->middleware('permission:Kullanıcı İşlemleri.Roller.Listele');
Route::get('role/create', [RoleController::class, 'create'])->name('role.create')->middleware('permission:Kullanıcı İşlemleri.Roller.İzinleri Düzenle');
Route::post('role', [RoleController::class, 'store'])->name('role.store')->middleware('permission:Kullanıcı İşlemleri.Roller.İzinleri Düzenle');
Route::get('role/{role}', [RoleController::class, 'show'])->name('role.show')->middleware('permission:Kullanıcı İşlemleri.Roller.Listele');
Route::get('role/{role}/edit', [RoleController::class, 'edit'])->name('role.edit')->middleware('permission:Kullanıcı İşlemleri.Roller.İzinleri Düzenle');
Route::put('role/{role}', [RoleController::class, 'update'])->name('role.update')->middleware('permission:Kullanıcı İşlemleri.Roller.İzinleri Düzenle');
# endregion

Route::get('role/unassign/{role}/{user}', [RoleController::class, 'unassign'])->name('role.unassign')->middleware('permission:Kullanıcı İşlemleri.Roller.İzinleri Düzenle');
Route::get('merchant/failed', [MerchantTrackingController::class, 'failed'])->name('merchant.failed')->middleware('permission:Pazaryerleri.Ürünler.Hatalı Ürünler');

# region merchant-setting
Route::get('merchant-setting', [MerchantSettingController::class, 'index'])->name('merchant-setting.index')->middleware('permission:Pazaryerleri.Entegrasyon Ayarları');
Route::post('merchant-setting', [MerchantSettingController::class, 'store'])->name('merchant-setting.store')->middleware('permission:Pazaryerleri.Entegrasyon Ayarları');
# endregion

if (app()->hasDebugModeEnabled()) {
    Route::fallback(function () {
        $segments = request()->segments();
        $view = str_replace('.html', '', implode('.', $segments));
        abort_unless(View::exists($view), 404, 'View not exists');

        return view($view);
    });
}

Route::controller(AuthController::class)
    ->name('auth.')
    ->group(function () {
        Route::get('login', 'login')->name('login')->withoutMiddleware(['auth:admin']);
        Route::post('login', 'authenticate')->name('authenticate')->withoutMiddleware(['auth:admin']);
        Route::get('logout', 'logout')->name('logout');
    });

# region user
Route::get('user', [UserController::class, 'index'])->name('user.index')->middleware('permission:Kullanıcı İşlemleri.Yöneticiler.Listele');
Route::get('user/create', [UserController::class, 'create'])->name('user.create')->middleware('permission:Kullanıcı İşlemleri.Yöneticiler.Ekle');
Route::post('user', [UserController::class, 'store'])->name('user.store')->middleware('permission:Kullanıcı İşlemleri.Yöneticiler.Ekle');
Route::get('user/{user}', [UserController::class, 'show'])->name('user.show')->middleware('permission:Kullanıcı İşlemleri.Yöneticiler.Listele');
Route::get('user/{user}/edit', [UserController::class, 'edit'])->name('user.edit')->middleware(permitPattern('Kullanıcı İşlemleri.Yöneticiler.Düzenle.*'));
Route::put('user/{user}', [UserController::class, 'update'])->name('user.update')->middleware(permitPattern('Kullanıcı İşlemleri.Yöneticiler.Düzenle.*'));
Route::delete('user/{user}', [UserController::class, 'destroy'])->name('user.destroy')->middleware(permitPattern('Kullanıcı İşlemleri.Yöneticiler.Düzenle.*'));
# endregion

# region  employee
Route::get('employee', [EmployeeController::class, 'index'])->name('employee.index')->middleware('permission:Kullanıcı İşlemleri.Kullanıcılar.Listele');
Route::get('employee/create', [EmployeeController::class, 'create'])->name('employee.create')->middleware('permission:Kullanıcı İşlemleri.Kullanıcılar.Ekle');
Route::post('employee', [EmployeeController::class, 'store'])->name('employee.store')->middleware('permission:Kullanıcı İşlemleri.Kullanıcılar.Ekle');
Route::get('employee/{employee}', [EmployeeController::class, 'show'])->name('employee.show')->middleware('permission:Kullanıcı İşlemleri.Kullanıcılar.Listele');
Route::get('employee/{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.edit')->middleware(permitPattern('Kullanıcı İşlemleri.Kullanıcılar.Düzenle.*'));
Route::put('employee/{employee}', [EmployeeController::class, 'update'])->name('employee.update')->middleware(permitPattern('Kullanıcı İşlemleri.Kullanıcılar.Düzenle.*'));
Route::delete('employee/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy')->middleware(permitPattern('Kullanıcı İşlemleri.Kullanıcılar.Düzenle.*'));
# endregion
