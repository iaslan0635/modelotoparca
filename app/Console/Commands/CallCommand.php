<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Http\Kernel;
use Illuminate\Http\Request;

class CallCommand extends Command
{
    protected $signature = 'call {route} {params?}';

    protected $description = 'Call the controller method based on route with GET parameters';

    public function handle(): void
    {
        $route = $this->argument('route');
        $params = $this->argument('params');

        $params = $params ? json_decode($params, true) : [];

        $request = Request::create($route, 'GET', $params);

        $kernel = app(Kernel::class);

        $response = $kernel->handle($request);
        $kernel->terminate($request, $response);

        $this->info($response);
    }
}
