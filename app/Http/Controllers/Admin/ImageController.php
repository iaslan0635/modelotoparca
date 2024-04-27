<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function delete(Request $request)
    {
        $image = Image::where('id', $request->input('image_id'))->firstOrFail();

        if ($image->from_bot) {
            $image->botImage->update(['image_id' => null]);
        }

        Image::where('id', $request->input('image_id'))->delete();

        return back();
    }
}
