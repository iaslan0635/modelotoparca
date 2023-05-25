<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\Import\ImportAlternativeJob;
use App\Jobs\Import\ImportTigerJob;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    protected const QUEUE = "import";

    public function index()
    {
        return view("admin.import.index", ["routes" => ["ITEMS_WEB", "ITEMSUBS", "ITMCLSAS"]]);
    }

    public function __construct()
    {
        $this->middleware(function (Request $request, \Closure $next) {
            $request->validate(["file" => "file|required"]);
            return $next($request);
        })->except("index");
    }

    protected function storeFile(): string
    {
        $filePath = request()->file("file")?->store("import");
        abort_unless($filePath, 400, "Dosya yüklenemedi");
        return $filePath;
    }

    public function ITEMS_WEB()
    {
        ImportTigerJob::dispatch($this->storeFile())->onQueue(self::QUEUE);

    }

    public function ITEMSUBS()
    {
        ImportAlternativeJob::dispatch($this->storeFile())->onQueue(self::QUEUE);
    }

    public function ITMCLSAS()
    {
        abort(500, "Not imlemented");
    }

    public function sparetobot_bot()
    {
        \Artisan::call("spareto:bot");
        return back();
    }

    public function sparetobot_connect()
    {
        \Artisan::call("spareto:connect");
        return back();
    }
}
