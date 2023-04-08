<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
{
    $roles = Role::all();
    return view('roles.index', compact('roles'));
}
public function create()
{
    return view('roles.create');
}

public function store(Request $request)
{
    $role = new Role;
    $role->name = $request->input('name');
    $role->save();
    
    return redirect()->route('roles.index')->with('success', 'El rol ha sido creado exitosamente.');
}

public function destroy(Role $role)
{
    $role->delete();
    
    return redirect()->route('roles.index')->with('success', 'El rol ha sido eliminado exitosamente.');
}
}
