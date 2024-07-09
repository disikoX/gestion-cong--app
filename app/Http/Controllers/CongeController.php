<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conge;

class CongeController extends Controller
{
    // Afficher tous les congés
    public function index()
    {
        $conges = Conge::with(['employe', 'typeConge'])->get();
        return response()->json($conges);
    }
}
