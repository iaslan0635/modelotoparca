<?php

namespace App\Livewire\Admin;

use App\Models\Employee;
use App\Models\Role;
use App\Packages\Permissions\Tree;
use Livewire\Component;

class PermissionEditor extends Component
{
    public Employee|Role $model;

    public array $designations;

    private Tree $tree;

    public bool $isDirty = false;

    public function booted()
    {
        $model = $this->model;
        $this->tree = Tree::fromModel($model, $this->designations);
    }

    public function mount(Employee|Role $model)
    {
        $this->model = $model;
        $this->designations = $model->permissionTree()->value('tree') ?? [];
    }

    public function render()
    {
        return view('livewire.admin.permission-editor', ['rootPermissions' => $this->tree->getChildren()]);
    }

    private function setPermissionDesignation(string $permissionName, ?bool $designation)
    {
        $permission = $this->tree->get($permissionName);
        $permission->designation = $designation;
        $this->designations = $this->tree->toDesignations();
        $this->isDirty = true;
    }

    public function allow(string $permissionName)
    {
        $this->setPermissionDesignation($permissionName, true);
    }

    public function deny(string $permissionName)
    {
        $this->setPermissionDesignation($permissionName, false);
    }

    public function indeterminate(string $permissionName)
    {
        $this->setPermissionDesignation($permissionName, null);
    }

    public function save()
    {
        $this->tree->save($this->model);
        $this->isDirty = false;
    }
}
