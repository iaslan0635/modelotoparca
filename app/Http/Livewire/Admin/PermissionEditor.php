<?php

namespace App\Http\Livewire\Admin;

use App\Models\Employee;
use App\Models\PermissionTree;
use App\Models\Role;
use App\Packages\Permissions\PermissionSynchronizer;
use App\Packages\Permissions\Tree;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class PermissionEditor extends Component
{
    public Employee|Role $model;
    public array $designations;
    private Tree $tree;

    public bool $isDirty = false;

    public function booted()
    {
        $model = $this->model;
        if ($model instanceof Employee) {
            $role = $model->roles()->first();
            if ($role !== null) {
                $roleTree = Tree::fromDesignations($role->permissionTree()->value("tree"));
            }
        }

        $this->tree = Tree::fromDesignations($this->designations, $roleTree ?? null);
    }

    public function mount(Employee|Role $model)
    {
        $this->model = $model;
        $this->designations = $model->permissionTree()->value("tree") ?? [];
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
            $this->model->permissionTree()->updateOrCreate([], ["tree" => $this->designations]);

            if ($this->model instanceof Employee) {
                $permissionNames = $this->tree->resolvePermissionNames();
                $permissionIds = Permission::whereIn("name", $permissionNames)->pluck("id");

                if (count($permissionNames) !== count($permissionIds)) {
                    PermissionSynchronizer::sync();
                    $permissionIds = Permission::whereIn("name", $permissionNames)->pluck("id");
                }

                $this->model->permissions()->sync($permissionIds);
            }
        });

        $this->isDirty = false;
    }
}
