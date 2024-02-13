<?php

namespace App\Http\Livewire\Admin;

use App\Models\Employee;
use App\Models\PermissionTree;
use App\Packages\Permissions\PermissionSynchronizer;
use App\Packages\Permissions\Tree;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

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
        DB::transaction(function () {
            PermissionTree::updateOrCreate(
                ["employee_id" => $this->employee->id],
                ["tree" => $this->designations]
            );

            $permissionNames = $this->tree->resolvePermissionNames();
            $permissionIds = Permission::whereIn("name", $permissionNames)->pluck("id");

            if (count($permissionNames) !== count($permissionIds)) {
                PermissionSynchronizer::sync();
                $permissionIds = Permission::whereIn("name", $permissionNames)->pluck("id");
            }

            $this->employee->permissions()->sync($permissionIds);
        });

        $this->isDirty = false;
    }
}
