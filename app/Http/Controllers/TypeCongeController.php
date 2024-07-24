<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeConge;

class TypeCongeController extends Controller
{
    // Afficher tous les types de congés
    public function index()
    {
        $typeConges = TypeConge::all();
        return response()->json($typeConges);
    }

    //Afficher un type spécifique
    public function show($id)
    {
        $typeConge = TypeConge::findOrFail($id);
        return response()->json($typeConge);
    }

    //Créer un type
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom_type_conge' => 'required|string',
            'jours_alloues' => 'required|number',
        ]);

        $typeConge = TypeConge::create($validatedData);
        return response()->json($typeConge, 201);
    }

    //Mettre à jour un type
    public function update(Request $request, $id)
    {
        $typeConge = TypeConge::findOrFail($id);
        $typeConge->update($request->all());
        return response()->json($typeConge);
    }

    //Supprimer un type
    public function destroy($id)
    {
        TypeConge::destroy($id);
        return response()->json(null, 204);
    }
}
