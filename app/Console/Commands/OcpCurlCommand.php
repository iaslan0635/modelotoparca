<?php

namespace App\Console\Commands;

use App\Services\Bots\OcpClient;
use Illuminate\Console\Command;

class OcpCurlCommand extends Command
{
    protected $signature = 'ocp:curl {url} {--o|output=}';

    protected $description = 'Request using OcpClient';

    public function handle()
    {
        $url = $this->argument("url");
        $response = OcpClient::request($url);
        if ($outFile = $this->option("output")) {
            file_put_contents($outFile, $response);
        } else {
            fwrite(STDOUT, $response);
        }
    }
}
