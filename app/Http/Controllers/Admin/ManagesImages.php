<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

trait ManagesImages
{
    protected function storeImage(Model $model, Request $request)
    {
        $file = $request->file("file")->storePublicly("images", ["disk" => "public"]);
        abort_unless($file, 400, "Unable to read file");
        $model->image()->create(["path" => $file]);
        return "success";
    }
}
