<?php

namespace App\Http\Livewire\Admin;

use App\Models\Employee;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class AddUserRole extends Component
{
    public Role $role;
    public string $searchText = "";

    public function render()
    {
        $users = $this->searchText ? Employee::withoutRole($this->role)->where(\DB::raw('CONCAT(first_name, " ", last_name)'), "like", "%$this->searchText%")->get() : [];
        return view('livewire.admin.add-user-role', compact("users"));
    }

    public function addUser(int $userId)
    {
        Employee::find($userId)->assignRole($this->role);
    }
}
