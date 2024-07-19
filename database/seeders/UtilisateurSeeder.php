<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UtilisateurSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'prenom' => 'puta',
            'nom' => 'shit',
            'mot_de_passe' => Hash::make('12'), // Hachez le mot de passe
            'code_employe' => 12,
        ]);
    }
}
