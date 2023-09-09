<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index(){
        $permissions = Permission::all();
        return view('backend.permissions.all_permissions',compact('permissions'));
    }

    public function add(){
        return "ADD";
    }
}
