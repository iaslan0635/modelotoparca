<?php

namespace App\Http\Controllers;

use App\Jobs\Import\ImportAlternativeJob;
use App\Jobs\Import\ImportTigerJob;
use Closure;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    protected const QUEUE = "import";

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

    protected function response()
    {
        return "İsteğiniz kuyruğa eklendi";
    }

    public function index()
    {
        return view("temporary.import");
    }

    public function tiger()
    {
        ImportTigerJob::dispatch($this->getExcel())->onQueue(self::QUEUE);
        return $this->response();
    }

    public function alternative()
    {
        ImportAlternativeJob::dispatch($this->getExcel())->onQueue(self::QUEUE);
        return $this->response();
    }
}
