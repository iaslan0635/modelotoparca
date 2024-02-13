<?php

namespace App\Packages\Permissions;

use Illuminate\Support\Arr;

/** Represents a permission tree */
final class Tree extends Node
{
    protected function __construct()
    {
        parent::__construct(null, "root");
    }

    public static function fromConfig(): self
    {
        $permissions = config("permissions");
        $tree = new Tree();
        $children = array_map(fn($arr) => Node::fromArray($arr, $tree), $permissions);
        $tree->setChildren($children);
        return $tree;
    }

    public static function fromDesignations(array $designations): self
    {
        $tree = self::fromConfig();
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
