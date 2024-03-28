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

Route::get('/', DashboardController::class)->name('dashboard');

Route::prefix('products/{product}/edit')->name('products.edit.')->controller(ProductController::class)->group(function () {
    Route::get('oem', 'push_oem')->name('oem');
    Route::post('image', 'push_image')->name('image');
    Route::get('searchForSelect2', 'searchForSelect2')->name('searchForSelect2');
    Route::get('rerunBot', 'rerunBot')->name('rerunBot');
});

Route::get('products/export', [ProductController::class, 'exportToExcel'])->name('products.export');
Route::resource('products', ProductController::class)->only(['index', 'show']);

Route::prefix('categories/{category}/edit')->name('categories.edit.')->controller(CategoryController::class)->group(function () {
    Route::post('image', 'push_image')->name('image');
    Route::post('delete_image', 'delete_image')->name('delete_image');
});
Route::resource('categories', CategoryController::class)->only(['index', 'show']);
Route::post('delete_image', [ImageController::class, 'delete'])->name('delete-image');

Route::controller(ImportController::class)->prefix('import')->name('import.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::post('ITEMS_WEB', 'ITEMS_WEB')->name('ITEMS_WEB');
    Route::post('ITEMS_WEB__APPEND', 'ITEMS_WEB__APPEND')->name('ITEMS_WEB__APPEND');
    Route::post('ITEMSUBS', 'ITEMSUBS')->name('ITEMSUBS');
    Route::post('ITMCLSAS', 'ITMCLSAS')->name('ITMCLSAS');
    Route::post('FILTER_OIL', 'FILTER_OIL')->name('FILTER_OIL');
    Route::post('MARKALAR', 'MARKALAR')->name('MARKALAR');
    Route::get('sparetobot_bot', 'sparetobot_bot')->name('sparetobot_bot');
    Route::get('sparetobot_connect', 'sparetobot_connect')->name('sparetobot_connect');
});

Route::controller(AnalysisController::class)->prefix('analysis')->name('analysis.')->group(function () {
    Route::get('search', 'search')->name('search');
    Route::get('search-replacements', 'searchReplacements')->name('search-replacements');
});

Route::controller(CarController::class)->prefix('cars')->name('cars.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::post('toggleIndexing', 'toggleIndexing')->name('toggleIndexing');
});

Route::resource('brands', BrandController::class)->only(['index', 'edit', 'update']);

Route::get('/sales-list', [OrderController::class, 'list'])->name('order.list');
Route::get('/order/{order}', [OrderController::class, 'show'])->name('order.show');
Route::get('/order-edit/{order}', [OrderController::class, 'edit'])->name('order.edit');
Route::put('/order-update/{order}', [OrderController::class, 'update'])->name('order.update');

Route::get('/marketplace-products', [MerchantProductController::class, 'index'])->name('marketplace-products.index');
Route::get('/marketplace-products/on-sale', [MerchantProductController::class, 'onSaleIndex'])->name('marketplace-products.on-sale');

Route::get('/marketplace-orders', [MerchantOrderController::class, 'index'])->name('order.marketplace');
Route::get('/marketplace-order/{order}', [MerchantOrderController::class, 'show'])->name('order.marketplace.show');
Route::get('/marketplace-order/{order}/{lineId}/{reasonType}', [MerchantOrderController::class, 'declineOrder'])->name('order.marketplace.declineOrder');

Route::get('category-sync', [CategoryController::class, 'categorySync'])->name('category-sync');
Route::get('brand-sync', [BrandController::class, 'brandSync'])->name('brand-sync');
Route::put('brand-sync', [BrandController::class, 'updateBrandConnection'])->name('brand-sync.update');
Route::get('brand-sync/search', [BrandController::class, 'searchTrendyolBrands'])->name('brand-sync.search');

Route::resource('permission', PermissionController::class, ['parameters' => ['permission' => 'employee']]);
Route::get('role/{role}/delete', [RoleController::class, 'delete'])->name('role.delete');
Route::resource('role', RoleController::class)->except('destroy');
Route::get('role/unassign/{role}/{user}', [RoleController::class, 'unassign'])->name('role.unassign');
Route::get('merchant/failed', [MerchantTrackingController::class, 'failed'])->name('merchant.failed');

Route::resource('merchant-setting', MerchantSettingController::class)->only(['index', 'store']);

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

Route::resource('user', UserController::class);
Route::resource('employee', EmployeeController::class);
