<?php

namespace App\Http\Controllers;

use App\Packages\Utils;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function store_file(UploadedFile $file, string $path)
    {
        return '/storage/' . $file->storePublicly($path, ['disk' => 'public']);
    }

    protected function search(Builder $query, array|string $keys)
    {
        return Utils::search($query, $keys);
    }
}
