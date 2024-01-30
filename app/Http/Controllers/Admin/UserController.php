<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.inhouse.user.index', ["users" => User::admin()->paginate()]);
    }
}
