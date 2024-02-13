<?php

namespace App\Packages\Permissions;

use Illuminate\Support\Arr;

/**
 * Represents a permission group in the permission tree
 */
class Node
{
    /** @var string The name of the node (last part of FQN) */
    public readonly string $name;

    /** @var array<Node> Child nodes with name keys */
    private array $children;

    /** @var bool|null The designation of the node */
    public ?bool $designation = null;

    /**
     * @param Node|null $parent The parent node
     * @param string $fqn Fully qualified name (dotted string, e.g. "Ürünler.Stok.Düzenle")
     */
    protected function __construct(
        public readonly ?Node  $parent,
        public readonly string $fqn,
    )
    {
        $this->name = Arr::last(explode(".", $fqn));
    }

    /**
     * Get the children of the node
     *
     * @return array<Node> The children of the node
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * Set the children of the node
     *
     * @param array<Node> $children The children to set
     */
    public function setChildren(array $children): void
    {
        $this->children = Arr::keyBy($children, "name");
    }

    /**
     * Create a Node from an array
     *
     * @param array $data The data to create the Node from
     * @param Node|null $parent The parent of the Node
     * @return Node The created Node
     */
    public static function fromArray(array $data, ?Node $parent = null): self
    {
        $name = ($parent !== null && $parent->fqn !== "root" ? $parent->fqn . "." : "") . $data["name"];
        $node = new Node($parent, $name);
        $node->setChildren(array_map(fn($arr) => Node::fromArray($arr, $node), $data["children"] ?? []));
        return $node;
    }

    /**
     * Get the serializable designations of the node
     *
     * @return array The designations of the node
     */
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

    /**
     * Get a child node by FQN
     *
     * @param array|string $fqn The fully qualified name of the child node
     * @return Node|null The child node or null if not found
     */
    public function get(array|string $fqn): ?Node
    {
        if (is_string($fqn)) $fqn = explode(".", $fqn);
        if (count($fqn) === 0) return $this;

        return $this->children[$fqn[0]]?->get(array_slice($fqn, 1));
    }

    /**
     * Check if the node is a leaf node (has no children)
     *
     * @return bool True if the node is a leaf node, false otherwise
     */
    public function isLeaf(): bool
    {
        return count($this->children) === 0;
    }

    /**
     * Get the state of the node (inherited designation)
     * @return bool|null
     */
    public function getState(): ?bool
    {
        if ($this->designation !== null) return $this->designation;

        return $this->parent?->getState();
    }
}
