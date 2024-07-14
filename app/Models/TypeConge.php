<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeConge extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_type_conge';

    protected $fillable = [
        'nom_type_de_conge','jours_alloues'
    ];


}
