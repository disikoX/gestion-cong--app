<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom', 'nom', 'email', 'date_embauche', 'id_departement', 'id_role', 'jours_conge_restants'
    ];
}
