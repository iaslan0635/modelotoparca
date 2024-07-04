<?php

namespace App\Packages;

use Closure;
use Illuminate\Support\Facades\Log;

/** Measure execution time and log it */
class Measure
{
    private function __construct(private readonly float $start)
    {
    }

    public static function start()
    {
        return new self(microtime(true));
    }

    /**
     * @template T
     *
     * @param  Closure(): T  $closure
     * @return T
     */
    public static function run(Closure $closure, string $name)
    {
        $measurement = self::start();
        $result = $closure();
        $measurement->log($name);

        return $result;
    }

    public function stop()
    {
        $end = microtime(true);

        return $end - $this->start;
    }

    public function dd()
    {
        dd($this->stop());
    }

    public function log(string $name)
    {
        $time = $this->stop();
        Log::driver('measurements')->debug("$name took $time seconds");
    }
}
