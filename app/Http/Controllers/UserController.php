<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Validar y guardar el usuario en la base de datos
        return redirect()->route('users.index')->with('success', 'El usuario ha sido creado exitosamente.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        // Validar y actualizar el usuario en la base de datos
        return redirect()->route('users.index')->with('success', 'El usuario ha sido actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'El usuario ha sido eliminado exitosamente.');
    }

    public function assignRole($userId, $roleId)
{
    $user = User::findOrFail($userId);
    $role = Role::findOrFail($roleId);
    
    $user->assignRole($role);
    
    return back()->with('success', 'El rol ha sido asignado al usuario exitosamente.');
}
}
