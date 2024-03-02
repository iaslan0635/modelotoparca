<?php

namespace App\Packages\Permissions;

use App\Models\Employee;
use Illuminate\Support\Arr;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

/** Represents a permission tree */
final class Tree extends Node
{
    public readonly ?Tree $roleTree;

    protected function __construct(Tree $roleTree = null)
    {
        parent::__construct(null, 'root');
        $this->roleTree = $roleTree;
    }

    public static function fromConfig(Tree $roleTree = null): self
    {
        $permissions = config('permissions');
        $tree = new Tree();
        $children = self::getChildrenFromArray($permissions, $tree, $roleTree);
        $tree->setChildren($children);

        return $tree;
    }

    public static function fromDesignations(array $designations, Tree $roleTree = null): self
    {
        $tree = self::fromConfig($roleTree);
        foreach ($designations as $path => $designation) {
            $node = $tree->get($path);
            if ($node !== null) {
                $node->designation = $designation;
            }
        }

        return $tree;
    }

    public function resolvePermissionNames()
    {
        return Arr::pluck($this->getPermittedLeafs(), 'fqn');
    }

    public function resolvePermissionIds(): array
    {
        $permissionNames = $this->resolvePermissionNames();

        return Permission::whereIn('name', $permissionNames)->pluck('id')->toArray();
    }

    public function save(Employee|Role $model): void
    {
        $model->permissionTree()->updateOrCreate([], ['tree' => $this->toDesignations()]);

        if ($model instanceof Employee) {
            $permissionIds = $this->resolvePermissionIds();
            $model->permissions()->sync($permissionIds);
        } else {
            foreach ($model->users as $employee) {
                $permissionIds = $this->fromModel($employee)->resolvePermissionIds();
                $model->permissions()->sync($permissionIds);
            }
        }

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    public static function fromModel(Employee|Role $model, array $designations = null): self
    {
        $designations ??= $model->permissionTree()->value('tree') ?? [];

        if ($model instanceof Employee) {
            $role = $model->roles()->first();
            if ($role !== null) {
                $roleDesignations = $role->permissionTree()->value('tree');
                if ($roleDesignations !== null) {
                    $roleTree = Tree::fromDesignations($roleDesignations);

                    return Tree::fromDesignations($designations, $roleTree);
                }
            }
        }

        return Tree::fromDesignations($designations);
    }
}
