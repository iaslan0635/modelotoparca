<?php

namespace App\Packages\Permissions;


use Spatie\Permission\Models\Permission;

/**
 *  Represents a permission group in the permission tree
 */
class Node implements \JsonSerializable
{
    /**
     * @var array<Node|Permission>
     */
    public $children = [];

    public function jsonSerialize(): mixed
    {
        return [
            "children" => $this->children,
        ];
    }
}
