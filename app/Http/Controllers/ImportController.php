<?php

namespace App\Http\Controllers;

use App\Jobs\ImportTigerJob;
use Closure;
use Illuminate\Http\Request;

class ImportController extends Controller
{

    public function __construct()
    {
        $this->middleware(function (Request $request, Closure $next) {
            $request->validate(["excel" => "file|required"]);
            return $next($request);
        })->except("index");
    }

    protected function getExcel(): string
    {
        $filePath = request()->file("excel")?->store("import/tiger");
        abort_unless($filePath, 400, "Dosya yüklenemedi");
        return $filePath;
    }

    public function index()
    {
        return view("temporary.import");
    }

    public function tiger()
    {
        ImportTigerJob::dispatch($this->getExcel());
    }

    public function alternative()
    {
        ImportTigerJob::dispatch($this->getExcel());
    }
}
