<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ImportController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

$temp = function () {
    $segments = request()->segments();
    $view = str_replace(".html", "", implode(".", $segments));
    abort_unless(View::exists($view), 444, "View not exists");
    return view($view);
};

Route::view("/", "admin.index");

Route::prefix("products/{product}/edit")->name("products.edit.")->controller(ProductController::class)->group(function () {
    Route::get("spareto", "push_spareto")->name("spareto");
    Route::get("oem", "push_oem")->name("oem");
    Route::post("image", "push_image")->name("image");
});
Route::resource("products", ProductController::class)->only(["index", "show"]);

Route::prefix("categories/{category}/edit")->name("categories.edit.")->controller(CategoryController::class)->group(function () {
    Route::post("image", "push_image")->name("image");
});
Route::resource("categories", CategoryController::class)->only(["index", "show"]);

Route::controller(ImportController::class)->prefix("import")->name("import.")->group(function () {
    Route::get("", "index")->name("index");
    Route::post("ITEMS_WEB", "ITEMS_WEB")->name("ITEMS_WEB");
    Route::post("ITEMSUBS", "ITEMSUBS")->name("ITEMSUBS");
    Route::post("ITMCLSAS", "ITMCLSAS")->name("ITMCLSAS");
    Route::get("sparetobot_bot", "sparetobot_bot")->name("sparetobot_bot");
    Route::get("sparetobot_connect", "sparetobot_connect")->name("sparetobot_connect");
});

Route::fallback($temp);
