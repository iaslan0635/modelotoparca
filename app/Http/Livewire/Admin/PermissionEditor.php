<?php

namespace App\Http\Livewire\Admin;

use App\Models\Employee;
use App\Packages\Permissions\Tree;
use Livewire\Component;

class PermissionEditor extends Component
{
    public Employee $employee;
    private Tree $tree;

    public function mount(Employee $employee)
    {
        $this->employee = $employee;
        $this->tree = Tree::fromEmployee($employee);
    }

    public function render()
    {
        return view('livewire.admin.permission-editor', ["outline" => config("permissions")]);
    }
}
