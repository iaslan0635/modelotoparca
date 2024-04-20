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

# region product
Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');
# endregion

Route::prefix('categories/{category}/edit')->name('categories.edit.')->controller(CategoryController::class)->group(function () {
    Route::post('image', 'push_image')->name('image');
    Route::post('delete_image', 'delete_image')->name('delete_image');
});

# region category
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
# endregion

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

# region brand
Route::get('brands', [BrandController::class, 'index'])->name('brands.index');
Route::get('brands/{brand}/edit', [BrandController::class, 'edit'])->name('brands.edit');
Route::put('brands/{brand}', [BrandController::class, 'update'])->name('brands.update');
# endregion

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

# region permission
Route::get('permission', [PermissionController::class, 'index'])->name('permission.index');
Route::get('permission/{employee}', [PermissionController::class, 'show'])->name('permission.show');
Route::get('permission/create', [PermissionController::class, 'create'])->name('permission.create');
Route::post('permission', [PermissionController::class, 'store'])->name('permission.store');
Route::get('permission/{employee}/edit', [PermissionController::class, 'edit'])->name('permission.edit');
Route::put('permission/{employee}', [PermissionController::class, 'update'])->name('permission.update');
Route::delete('permission/{employee}', [PermissionController::class, 'destroy'])->name('permission.destroy');
# endregion

Route::get('role/{role}/delete', [RoleController::class, 'delete'])->name('role.delete');

# region role
Route::get('role', [RoleController::class, 'index'])->name('role.index');
Route::get('role/create', [RoleController::class, 'create'])->name('role.create');
Route::post('role', [RoleController::class, 'store'])->name('role.store');
Route::get('role/{role}', [RoleController::class, 'show'])->name('role.show');
Route::get('role/{role}/edit', [RoleController::class, 'edit'])->name('role.edit');
Route::put('role/{role}', [RoleController::class, 'update'])->name('role.update');
# endregion

Route::get('role/unassign/{role}/{user}', [RoleController::class, 'unassign'])->name('role.unassign');
Route::get('merchant/failed', [MerchantTrackingController::class, 'failed'])->name('merchant.failed');

# region merchant-setting
Route::get('merchant-setting', [MerchantSettingController::class, 'index'])->name('merchant-setting.index');
Route::post('merchant-setting', [MerchantSettingController::class, 'store'])->name('merchant-setting.store');
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
Route::get('user', [UserController::class, 'index'])->name('user.index');
Route::get('user/create', [UserController::class, 'create'])->name('user.create');
Route::post('user', [UserController::class, 'store'])->name('user.store');
Route::get('user/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('user/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
# endregion

# region  employee
Route::get('employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('employee', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('employee/{employee}', [EmployeeController::class, 'show'])->name('employee.show');
Route::get('employee/{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('employee/{employee}', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('employee/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
# endregion
