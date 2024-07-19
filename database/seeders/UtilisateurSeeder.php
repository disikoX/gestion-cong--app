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
            'password' => Hash::make('123'), // Hachez le mot de passe
            'code_employe' => 133,
        ]);
    }
}
