<?php

namespace App\Packages\Permissions;

use Illuminate\Support\Facades\Cache;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

final class PermissionSynchronizer
{
    /** @return array<Permission> added permissions */
    public static function sync(): array
    {
        $addedPermissions = [];
        foreach (self::getPermissionsFromConfig() as $permission) {
            if (! Permission::where('name', $permission)->exists()) {
                $addedPermissions[] = Permission::create([
                    'name' => $permission,
                    'guard_name' => 'admin',
                ]);
            }
        }

        return $addedPermissions;
    }

    public static function getPermissionsFromConfig(): array
    {
        return self::convertPermissionConfigArray(config('permissions'));
    }

    private static function convertPermissionConfigArray(array $array, string $currentKey = ''): array
    {
        $result = [];
        foreach ($array as $element) {
            $newKey = $currentKey.($currentKey ? '.' : '').$element['name'];
            $result = isset($element['children']) ?
                array_merge($result, self::convertPermissionConfigArray($element['children'], $newKey)) :
                array_merge($result, [$newKey]);
        }

        return $result;
    }

    /** Obtain permissions that are present in the configuration but not in the database. */
    public static function diff()
    {
        $permissions = self::getPermissionsFromConfig();
        $dbPermissions = Permission::pluck('name')->toArray();

        return array_diff($dbPermissions, $permissions);
    }

    public static function clearCache()
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();
        Cache::forget('permissionPatterns:*'); // TODO: wildcard does not work
    }
}
