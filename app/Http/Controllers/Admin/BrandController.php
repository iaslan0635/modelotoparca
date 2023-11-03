<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brandSync()
    {
        return view('admin.apps.ecommerce.catalog.sync-brands');
    }
}
