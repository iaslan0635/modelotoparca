<?php

namespace App\Console\Commands;

use App\Models\Car;
use App\Models\Maker;
use Closure;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Symfony\Component\Console\Helper\ProgressBar;

class OcpIngestCarsCommand extends Command
{
    protected $signature = 'ocp:ingest-cars {path}';

    protected $description = 'Insert cars from onlinecarparts json to database';

    protected $outputSecitons = [];

    public function handle()
    {
        $path = $this->argument('path');
        $files = collect(scandir($path))
            ->reject(fn ($f) => $f == '.' || $f == '..')
            ->map(fn ($f) => $path.DIRECTORY_SEPARATOR.$f);

        $this->_withProgressBar($files, self::processFile(...), 1);
    }

    public function processFile(string $file)
    {
        $json = json_decode(file_get_contents($file), true);
        $this->_withProgressBar($json, self::insertCar(...), 2);
    }

    public function insertCar(array $car)
    {
        $makerName = self::pop($car, 'maker_name');
        $fullPermalink = self::pop($car, 'permalink');
        $id = self::pop($car, 'id');

        $re = '/https:\/\/www\.onlinecarparts\.co\.uk\/car-brands\/spare-parts-(([\w-]+)\/[\w-]+)\/\d+\.html/';
        if (! preg_match($re, $fullPermalink, $matches)) {
            throw new Exception("Permalink incorrect. permalink: $fullPermalink");
        }

        [, $carLink, $makerLink] = $matches;

        Maker::firstOrCreate(
            ['id' => $car['maker_id']],
            ['name' => $makerName, 'permalink' => $makerLink]
        );

        $toInsert = Arr::mapWithKeys($car, fn ($v, $k) => [Str::snake($k) => $v]);
        Car::updateOrCreate([
            'id' => $id,
        ], [
            'permalink' => "$id/$carLink",
            ...$toInsert,
            'maker_id' => $car['maker_id'],
        ]);
    }

    public function pop(array &$array, string $key)
    {
        $value = $array[$key];
        unset($array[$key]);

        return $value;
    }

    public function _withProgressBar($totalSteps, Closure $callback, $section)
    {
        $bar = new ProgressBar(
            $this->outputSecitons[$section] = ($this->outputSecitons[$section] ?? $this->getOutput()->getOutput()->section()),
            is_iterable($totalSteps) ? count($totalSteps) : $totalSteps
        );

        $bar->start();

        if (is_iterable($totalSteps)) {
            foreach ($totalSteps as $value) {
                $callback($value, $bar);

                $bar->advance();
            }
        } else {
            $callback($bar);
        }

        $bar->finish();

        if (is_iterable($totalSteps)) {
            return $totalSteps;
        }
    }
}
