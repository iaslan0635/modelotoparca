<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Search;

class AnalysisController extends Controller
{
    public function search()
    {
        return view('admin.pages.search-analysis', [
            'searches' => Search::orderByDesc('id','desc')->paginate(),
        ]);
    }

    public function searchReplacements()
    {
        return view('admin.pages.search-replacements');
    }
}
