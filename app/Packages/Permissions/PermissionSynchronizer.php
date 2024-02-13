<?php

namespace App\Packages\Permissions;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

final class PermissionSynchronizer
{
    private static function convertArray(array $array, string $currentKey = ''): array
    {
        $result = [];
        foreach ($array as $element) {
            $newKey = $currentKey . ($currentKey ? '.' : '') . $element['name'];
            $result = isset($element['children']) ?
                array_merge($result, self::convertArray($element['children'], $newKey)) :
                array_merge($result, [$newKey]);
        }
        return $result;
    }

    public static function getPermissions(): array
    {
        return self::convertArray(config("permissions"));
    }

    public static function sync(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();
        foreach (self::getPermissions() as $permission) {
            if (!Permission::where("name", $permission)->exists()) {
                Permission::create(["name" => $permission, "guard_name" => "admin"]);
            }
        }
    }
}
