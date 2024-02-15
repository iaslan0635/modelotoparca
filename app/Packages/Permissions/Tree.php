<?php

namespace App\Packages\Permissions;

use Illuminate\Support\Arr;

/** Represents a permission tree */
final class Tree extends Node
{
    public readonly ?Tree $roleTree;

    protected function __construct(?Tree $roleTree = null)
    {
        parent::__construct(null, "root");
        $this->roleTree = $roleTree;
    }

    public static function fromConfig(?Tree $roleTree = null): self
    {
        $permissions = config("permissions");
        $tree = new Tree();
        $children = self::getChildrenFromArray($permissions, $tree, $roleTree);
        $tree->setChildren($children);
        return $tree;
    }

    public static function fromDesignations(array $designations, ?Tree $roleTree = null): self
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
        return Arr::pluck($this->getPermittedLeafs(), "fqn");
    }
}
