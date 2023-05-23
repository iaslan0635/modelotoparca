<?php

use Illuminate\Support\Facades\Route;

$temp = function () {
    $segments = request()->segments();
    $view = implode(".", $segments);
    return view(str_replace(".html", "", $view));
};

Route::view("/", "admin.index");
Route::fallback($temp);

Route::resource("products", "");
