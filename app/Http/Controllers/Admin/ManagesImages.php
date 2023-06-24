<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

trait ManagesImages
{
    protected function storeImage(Model $model, Request $request)
    {
        $model->storeImage($request->file("file"));
        return "success";
    }
}
