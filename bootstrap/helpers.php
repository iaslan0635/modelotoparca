<?php

use App\Packages\Permissions\PermissionSynchronizer;
use Illuminate\Support\Facades\DB;

function merchant_setting(string $merchant, string $key, mixed $default = null)
{
    return DB::table("merchants")
        ->where("name", $merchant)
        ->where("key", $key)
        ->value("value") ?? $default;
}

function get_item($target, $key, $default = null)
{
    if (Arr::accessible($target) && Arr::exists($target, $key)) {
        return $target[$key];
    } elseif (is_object($target) && isset($target->{$key})) {
        return $target->{$key};
    } else {
        return value($default);
    }
}

/**
 * Retrieves the permissions for the provided permission names.
 * It can accept any pattern that data_get accepts, for example 'group.*' or 'group.*.name'.
 *
 * @param string ...$permissionPatterns The permission patterns to retrieve.
 * @return array The permissions for the provided names.
 * @throws Exception If no permission name is provided or if a permission is not found.
 * @todo Add cache for performance (clear cache while adding new permissions)
 */
function permissions(string ...$permissionPatterns)
{
    if (count($permissionPatterns) == 0) {
        throw new Exception("Provide a permsission name");
    } elseif (count($permissionPatterns) > 1) {
        return array_merge(...array_map(permissions(...), $permissionPatterns));
    }
    $permission = $permissionPatterns[0];

    $permissions = PermissionSynchronizer::getPermissions();
    $permissions = collect($permissions)->combine($permissions)->undot();
    $results = collect(data_get($permissions, $permission))
        ->flatten()->values()->toArray();

    if (empty($results)) {
        throw new Exception("Permission not found: $permission");
    }

    return $results;
}
