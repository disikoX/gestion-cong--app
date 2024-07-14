<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;





class EmployeController extends Controller
{

    public function create()
    {
        $departements = Departement::all();
        $roles = Role::all();
        return response()->json($roles,$departements);
    }



    // Récupérer tous les employés
    public function index()
    {
        $employes = Employe::all();
        return response()->json($employes);
    }

    //Recupérer un employé spécifique 
    public function show($id)
    {
        $employe = Employe::findOrFail($id);
        return response()->json($employe);
    }

    //Mettre à jour liste employé
    public function update(Request $request, $id)
    {
        $employe = Employe::findOrFail($id);
        $employe->update($request->all());
        return response()->json($employe);
    }

    // Ajouter un nouvel employé
    public function store(Request $request)
    {
        $request->validate([
            'prenom' => 'required|string|max:50',
            'nom' => 'required|string|max:50',
            'email' => 'required|email|max:100|unique:employes',
            'date_embauche' => 'required|date',
            'id_departement' => 'required|integer|exists:departements,id_departement',
            'id_role' => 'required|integer|exists:roles,id_role',
            'jours_conge_restants' => 'required|integer',
        ]);

        $employe = Employe::create($request->all());
        return response()->json($employe, 200);
    }
}
