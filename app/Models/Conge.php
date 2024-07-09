<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conge extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_employe', 'id_type_conge', 'date_debut', 'date_fin', 'statut', 'date_demande', 'date_approbation'
    ];

    // Relation avec le modèle Employe
    public function employe()
    {
        return $this->belongsTo(Employe::class, 'id_employe');
    }

    // Relation avec le modèle TypeConge
    public function typeConge()
    {
        return $this->belongsTo(TypeConge::class, 'id_type_conge');
    }
}
