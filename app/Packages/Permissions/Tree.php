<?php

namespace App\Packages\Permissions;

use App\Models\Employee;
use App\Models\PermissionTree;

/**
 *  Represents a permission tree
 */
class Tree
{
    public Node $root;

    public function __construct(Node $root)
    {
        $this->root = $root;
    }

    public static function fromConfig(): self
    {
        $permissions = config("permissions");
        return new Tree(Node::fromArray($permissions));
    }

    public static function fromEmployee(Employee|int $employeeOrId): self
    {
        $employeeId = $employeeOrId instanceof Employee ? $employeeOrId->id : $employeeOrId;

        $serialized = PermissionTree::where("employee_id", $employeeId)->value("tree");

        if ($serialized === null) {
            return Tree::fromConfig();
        }

        return unserialize($serialized); // TODO: Use json
    }
}
