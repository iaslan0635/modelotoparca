<?php

namespace App\Http\Controllers;

class RoleController extends Controller
{
    public function index()
    {
        return view("admin.apps.user-management.roles.list");
    }

    public function show()
    {
        return view("admin.apps.user-management.roles.view");
    }
}
