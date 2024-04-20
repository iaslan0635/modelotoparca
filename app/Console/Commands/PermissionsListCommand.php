<?php

namespace App\Console\Commands;

use App\Packages\Permissions\PermissionSynchronizer;
use Illuminate\Console\Command;

class PermissionsListCommand extends Command
{
    protected $signature = 'permissions:list';

    protected $description = 'Command description';

    public function handle(): void
    {
        $permissions = PermissionSynchronizer::getPermissionsFromConfig();

        foreach ($permissions as $item) {
            $this->info($item);
        }
    }
}
