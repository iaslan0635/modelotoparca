<?php

namespace App\Http\Controllers;

use App\Packages\Utils;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Collection;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function store_file(UploadedFile $file, string $path)
    {
        return '/storage/' . $file->storePublicly($path, ['disk' => 'public']);
    }

    protected static function search(Builder $query, array|string $columns, ?string $search = null)
    {
        return Utils::search($query, $columns, $search);
    }

    /** Same with search but gives priority to code columns */
    protected static function searchWithCode(Builder $query, array|string $codeColumns, array|string $columns, string $search = null)
    {
        $search ??= request('search');

        if (!$search) {
            return $query;
        }

        $exactCodeColumn = Collection::wrap($codeColumns)
            ->first(fn ($column) => $query->where($column, $search)->exists());
        if ($exactCodeColumn) return $query->where($exactCodeColumn, $search);

        $codeQuery = Utils::search($query->clone(), $codeColumns, $search);
        if ($codeQuery->exists()) return $codeQuery;

        return static::search($query, $columns, $search);
    }
}
