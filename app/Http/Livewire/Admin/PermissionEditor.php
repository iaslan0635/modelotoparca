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

    public function booted()
    {
        $this->tree = Tree::fromDesignations($this->designations);
    }

    public function mount(Employee $employee)
    {
        $this->employee = $employee;
        $this->designations = [];
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

    public function fromEmployee(Employee|int $employeeOrId)
    {
        $employeeId = $employeeOrId instanceof Employee ? $employeeOrId->id : $employeeOrId;

        $serialized = PermissionTree::where("employee_id", $employeeId)->value("tree");

        if ($serialized === null) {
            return Tree::fromConfig();
        }

        return unserialize($serialized); // TODO: Use json
    }

    public function saveForEmployee(Employee $employee): void
    {
        PermissionTree::updateOrCreate(
            ["employee_id" => $employee->id],
            ["tree" => serialize($this)] // TODO: Use json
        );
    }
}
