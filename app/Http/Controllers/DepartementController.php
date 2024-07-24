<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;

class DepartementController extends Controller
{
    // Afficher tous les departements
    public function index()
    {
        $departements = Departement::all();
        return response()->json($departements);
    }

    //Afficher un departement spécifique
    public function show($id)
    {
        $departement = Departement::findOrFail($id);
        return response()->json($departement);
    }

    //Créer un departement
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom_departement' => 'required|string',
        ]);

        $departement = Departement::create($validatedData);
        return response()->json($departement, 201);
    }

    //Mettre à jour un departement
    public function update(Request $request, $id)
    {
        $departement = Departement::findOrFail($id);
        $departement->update($request->all());
        return response()->json($departement);
    }

    //Supprimer un departement
    public function destroy($id)
    {
        Departement::destroy($id);
        return response()->json(null, 204);
    }
}
