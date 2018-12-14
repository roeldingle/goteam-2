<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Role;

class RoleController extends Controller
{
  public function index(Request $request)
  {
    //dd($request->user()->authorizeRoles(['SA', 'A', 'M']));
    $roles = Role::latest()->paginate(10);
    return view('roles.index', compact('roles'));
  }
}
