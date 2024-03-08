<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    //
    public function index()
    {
        $roles = Roles::all();
        return response()->json($roles);
    }

    public function store(Roles $role)
    {
        $role->save();
        return response()->json([
            'message' => 'Role created successfully'
        ],201);
    }

    public function show(Roles $role)
    {
        return response()->json($role);
    }

    public function update(Roles $role, Request $request)
    {
        $role->update($request->all());
        return response()->json([
            'message' => 'Role updated successfully'
        ],200);
    }

    public function destroy(Roles $role)
    {
        $role->delete();
        return response()->json([
            'message' => 'Role deleted successfully'
        ],200);
    }
}
