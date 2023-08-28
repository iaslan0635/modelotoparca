<?php

use App\Http\Controllers\Admin\AnalysisController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ImportController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

$temp = function () {
    $segments = request()->segments();
    $view = str_replace(".html", "", implode(".", $segments));
    abort_unless(View::exists($view), 404, "View not exists");
    return view($view);
};

Route::view("/", "admin.index");

Route::prefix("products/{product}/edit")->name("products.edit.")->controller(ProductController::class)->group(function () {
    Route::get("spareto", "push_spareto")->name("spareto");
    Route::get("oem", "push_oem")->name("oem");
    Route::post("image", "push_image")->name("image");
    Route::get("searchForSelect2", "searchForSelect2")->name("searchForSelect2");
});
Route::resource("products", ProductController::class)->only(["index", "show"]);

Route::prefix("categories/{category}/edit")->name("categories.edit.")->controller(CategoryController::class)->group(function () {
    Route::post("image", "push_image")->name("image");
    Route::post("delete_image", "delete_image")->name("delete_image");
});
Route::resource("categories", CategoryController::class)->only(["index", "show"]);
Route::post("delete_image", [ImageController::class, "delete"])->name("delete-image");

Route::controller(ImportController::class)->prefix("import")->name("import.")->group(function () {
    Route::get("", "index")->name("index");
    Route::post("ITEMS_WEB", "ITEMS_WEB")->name("ITEMS_WEB");
    Route::post("ITEMS_WEB__APPEND", "ITEMS_WEB__APPEND")->name("ITEMS_WEB__APPEND");
    Route::post("ITEMSUBS", "ITEMSUBS")->name("ITEMSUBS");
    Route::post("ITMCLSAS", "ITMCLSAS")->name("ITMCLSAS");
    Route::post("FILTER_OIL", "FILTER_OIL")->name("FILTER_OIL");
    Route::get("sparetobot_bot", "sparetobot_bot")->name("sparetobot_bot");
    Route::get("sparetobot_connect", "sparetobot_connect")->name("sparetobot_connect");
    Route::get("track_ITEMS_WEB", "track_ITEMS_WEB")->name("track_ITEMS_WEB");
});

Route::controller(AnalysisController::class)->prefix("analysis")->name("analysis.")->group(function () {
    Route::get("search", "search")->name("search");
    Route::get("search-replacements", "searchReplacements")->name("search-replacements");
});

Route::controller(CarController::class)->prefix("cars")->name("cars.")->group(function () {
    Route::get("", "index")->name("index");
    Route::post("toggleIndexing", "toggleIndexing")->name("toggleIndexing");
});

Route::fallback($temp);

Route::get("/sales-list", [OrderController::class, 'list'])->name('order.list');
Route::get("/order/{order}", [OrderController::class, 'show'])->name('order.show');
Route::get("/order-edit/{order}", [OrderController::class, 'edit'])->name('order.edit');
Route::put("/order-update/{order}", [OrderController::class, 'update'])->name('order.update');
