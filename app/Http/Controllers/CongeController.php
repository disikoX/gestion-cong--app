<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conge;
use App\Models\TypeConge;

class CongeController extends Controller
{
    // Afficher tous les congés
    public function index()
    {
        $conges = Conge::with(['employe'])->get();
        return response()->json($conges);
    }

    //Afficher un congé spécifique
    public function show($id)
    {
        $conge = Conge::with(['employe'])->findOrFail($id);
        return response()->json($conge);
    }

    //Créer un congé
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_employe' => 'required|exists:employes,id_employe',
            'id_type_conge' => 'required|exists:types_conges,id_type_conge',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'statut' => 'required|string',
            'date_demande' => 'required|date',
            'date_approbation' => 'nullable|date'
        ]);

        $conge = Conge::create($validatedData);
        return response()->json($conge, 201);
    }

    //Mettre à jour un congé
    public function update(Request $request, $id)
    {
        $conge = Conge::findOrFail($id);
        $conge->update($request->all());
        return response()->json($conge);
    }

    //Supprimer un congé
    public function destroy($id)
    {
        Conge::destroy($id);
        return response()->json(null, 204);
    }
}
