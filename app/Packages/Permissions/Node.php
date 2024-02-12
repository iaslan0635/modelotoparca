<?php

namespace App\Packages\Permissions;


use Spatie\Permission\Models\Permission;

/**
 *  Represents a permission group in the permission tree
 */
class Node implements \JsonSerializable
{
    public string $name;
    public ?bool $designation;

    /** @var array<Node|Permission> */
    public $children = [];

    public function __construct(string $name, ?bool $designation = null)
    {
        $this->name = $name;
        $this->designation = $designation;
    }

    public function jsonSerialize(): mixed
    {
        return [
            "children" => $this->children,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new Node($data["name"], $data["designation"]);
    }
}
