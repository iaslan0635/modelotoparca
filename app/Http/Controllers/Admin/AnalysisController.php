<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Search;

class AnalysisController extends Controller
{
    public function index()
    {
        $query = Search::query()->orderBy('id', 'desc');
        $query = $this->search($query, 'query');

        return view('admin.pages.search-analysis', [
            'searches' => $query->paginate(),
        ]);
    }

    public function searchReplacements()
    {
        return view('admin.pages.search-replacements');
    }
}
