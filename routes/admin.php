<?php

use App\Http\Controllers\Admin\ImportController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

$temp = function () {
    $segments = request()->segments();
    $view = implode(".", $segments);
    return view(str_replace(".html", "", $view));
};

Route::view("/", "admin.index");
Route::fallback($temp);

Route::prefix("products/{product}/edit")->name("products.edit.")->controller(ProductController::class)->group(function () {
    Route::get("spareto", "push_spareto")->name("spareto");
    Route::get("oem", "push_oem")->name("oem");
});
Route::resource("products", ProductController::class)->only(["index", "show", "update"]);
Route::controller(ImportController::class)->prefix("import")->name("import.")->group(function () {
    Route::get("", "index")->name("index");
    Route::post("ITEMS_WEB", "ITEMS_WEB")->name("ITEMS_WEB");
    Route::post("ITEMSUBS", "ITEMSUBS")->name("ITEMSUBS");
    Route::post("ITMCLSAS", "ITMCLSAS")->name("ITMCLSAS");
    Route::post("sparetobot_bot", "sparetobot_bot")->name("sparetobot_bot");
    Route::post("sparetobot_connect", "sparetobot_connect")->name("sparetobot_connect");
});
