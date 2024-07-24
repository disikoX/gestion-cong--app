<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    // Afficher tous les roles
    public function index()
    {
        $roles = Role::all();
        return response()->json($roles);
    }

    //Afficher un role spécifique
    public function show($id)
    {
        $role = Role::findOrFail($id);
        return response()->json($role);
    }

    //Créer un role
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom_role' => 'required|string',
        ]);

        $role = Role::create($validatedData);
        return response()->json($role, 201);
    }

    //Mettre à jour un role
    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->update($request->all());
        return response()->json($role);
    }

    //Supprimer un role
    public function destroy($id)
    {
        Role::destroy($id);
        return response()->json(null, 204);
    }
}
