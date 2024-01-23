<?php

namespace App\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleSectionOutput;

class FancyCommand extends Command
{
    function iterate($iterable, bool $transistent = true)
    {
        /** @var ConsoleSectionOutput $section */
        $section = $this->output->getOutput()->section();
        $bar = new ProgressBar($section, count($iterable));
        $bar->start();

        yield from $bar->iterate($iterable);

        if ($transistent)
            $section->clear();
    }
}
