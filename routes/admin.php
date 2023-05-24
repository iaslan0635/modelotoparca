<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

$temp = function () {
    $segments = request()->segments();
    $view = implode(".", $segments);
    return view(str_replace(".html", "", $view));
};

Route::view("/", "admin.index");
Route::fallback($temp);

Route::resource("products", ProductController::class)->only(["index", "show", "update"]);
