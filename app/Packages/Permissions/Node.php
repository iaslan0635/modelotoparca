<?php

namespace App\Packages\Permissions;


use Illuminate\Support\Arr;

/**
 *  Represents a permission group in the permission tree
 */
class Node
{
    public readonly string $name;

    /** Child nodes with name keys
     * @var array<Node>
     */
    private array $children;
    public ?bool $designation = null;

    /**
     * @param Node|null $parent
     * @param string $fqn Fully qualified name (dotted string, e.g. "Ürünler.Stok.Düzenle")
     */
    protected function __construct(
        public readonly ?Node  $parent,
        public readonly string $fqn,
    )
    {
        $this->name = Arr::last(explode(".", $fqn));
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    /** @param array<Node> $children */
    public function setChildren(array $children): void
    {
        $assocative = [];
        foreach ($children as $child) {
            $assocative[$child->name] = $child;
        }

        $this->children = $assocative;
    }


    public static function fromArray(array $data, ?Node $parent = null): self
    {
        $name = ($parent !== null && $parent->fqn !== "root" ? $parent->fqn . "." : "") . $data["name"];
        $node = new Node($parent, $name);
        $children = array_map(fn($arr) => Node::fromArray($arr, $node), $data["children"] ?? []);
        $node->setChildren($children);
        return $node;
    }

    public function toDesignations()
    {
        $designations = [];
        foreach ($this->children as $child) {
            if ($child->designation !== null) {
                $designations[$child->fqn] = $child->designation;
            }
            $designations = array_merge($designations, $child->toDesignations());
        }
        return $designations;
    }

    public function get(array|string $path): ?Node
    {
        if (is_string($path)) $path = explode(".", $path);
        if (count($path) === 0) return $this;


        $child = $this->children[$path[0]] ?? null;
        return $child?->get(array_slice($path, 1));

    }

    public function isLeaf()
    {
        return count($this->children) === 0;
    }

    public function designationRepr()
    {
        if ($this->designation === true) return "allow";
        if ($this->designation === false) return "deny";
        return "indeterminate";
    }
}
