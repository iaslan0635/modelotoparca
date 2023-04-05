<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::view('product-list', 'product-list')->name('product-list');
Route::view('models-list', 'models-list')->name('models-list');

Route::view('quickview', 'quickview')->name('quickview');

Route::post('upload', function (\Illuminate\Http\Request $request) {
    $save = \App\Models\Brand::create([
        'name' => "efe",
        "slug" => "efe",
        "type" => \App\Enums\BrandType::PRODUCT,
    ]);

    $save->saveImages($save->getKey(), $request->allFiles());

    return "success";
})->name('upload');
