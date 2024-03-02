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
        $addedPermissions = PermissionSynchronizer::sync();
        if (empty($addedPermissions)) {
            $this->warn('No new permissions added.');

            return;
        }

        foreach ($addedPermissions as $permission) {
            $this->info("added $permission->name");
        }

        $removedPermissions = PermissionSynchronizer::diff();
        if (filled($removedPermissions)) {
            $this->warn("\nThe following permissions are present in the database but not in the configuration:");
            foreach ($removedPermissions as $permission) {
                $this->warn("$permission");
            }
        }

        $this->info("\nPermissions synchronized.");
    }
}
