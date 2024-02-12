<?php

namespace App\Console\Commands;

use App\Packages\Permissions\PermissionSynchronizer;
use Illuminate\Console\Command;

class SynchronizePermissionsCommand extends Command
{
    protected $signature = 'permissions:sync';

    protected $description = 'Synchronize permissions with the database.';

    public function handle(): void
    {
        PermissionSynchronizer::sync();
        $this->info('Permissions synchronized.');
    }
}
