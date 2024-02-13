<?php

namespace App\Http\Livewire\Admin;

use App\Models\Employee;
use App\Models\PermissionTree;
use App\Packages\Permissions\Tree;
use Livewire\Component;

class PermissionEditor extends Component
{
    public Employee $employee;
    public array $designations;
    private Tree $tree;

    public bool $isDirty = false;

    public function booted()
    {
        $this->tree = Tree::fromDesignations($this->designations);
    }

    public function mount(Employee $employee)
    {
        $this->employee = $employee;
        $this->designations = PermissionTree::where("employee_id", $employee->id)->value("tree") ?? [];
    }

    public function render()
    {
        return view('livewire.admin.permission-editor', ["tree" => $this->tree]);
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
        PermissionTree::updateOrCreate(
            ["employee_id" => $this->employee->id],
            ["tree" => $this->designations]
        );

        $this->isDirty = false;
    }
}
