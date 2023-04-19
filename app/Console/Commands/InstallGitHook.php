<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InstallGitHook extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install-git-hook';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installs pint to git hook';

    private const HOOK_CONTENT = <<<SH
#!/bin/sh

./vendor/bin/pint --dirty

SH;


    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        file_put_contents(base_path(".git/hooks/pre-commit"), self::HOOK_CONTENT);
    }
}
